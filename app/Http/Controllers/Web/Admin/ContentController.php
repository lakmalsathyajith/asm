<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Contracts\RepoInterfaces\BlogInterface;
use App\Contracts\RepoInterfaces\ContentInterface;
use App\Entities\Apartment;
use App\Entities\Content;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Content\StoreContentRequest;
use App\Http\Requests\Content\UpdateContentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ContentController extends AbstractController
{

    private $content;
    private $apartment;
    private $blog;

    function __construct(
        ContentInterface $contentRepoInstance,
        ApartmentInterface $apartmentRepoInstance,
        BlogInterface $blogRepoInstance,
        Content $content
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $contentRepoInstance;
        $this->apartment = $apartmentRepoInstance;
        $this->blog = $blogRepoInstance;
        $this->content = $content;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = '';
        $data['records'] = $this->activeRepo->all();
        return view('admin.pages.content.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if query params are defined
        $params['contentable-type'] = request()->query('contentable-type', null);
        $params['contentable-id'] = request()->query('contentable-id', null);
        $params['content-type'] = request()->query('content-type', 'apartment');
        $params['content-sub-type'] = request()->query('content-sub-type', null);
        $params['step'] = request()->query('step', null);
        $params['locale'] = request()->query('locale', null);
        $params['apartment'] = request()->query('apartment', null);
        $params['submitted'] = request()->query('submitted', false);
        if(request()->query('name', null)) {
            $params['name'] = request()->query('name', null);
        }
        if(request()->query('slug', null)) {
            $params['slug'] = request()->query('slug', null);
        }

        $subtype = isset($params['contentable-type'])
            ? strtoupper($params['contentable-type'])
            : null;

        $data['route'] = route('content.store');
        $data['title'] = '';
        $data['action'] = 'Create';
        $data['contentTypes'] = $this->content->getTypes();
        $data['contentSubTypes'] = $this->content->getSubTypes($subtype);
        $data['locales'] = array_flip(config('app.locales'));
        $data['params'] = $params;
        $this->generateLinks($params);
        $data['links'] = $this->getLinks();
        return view('admin.pages.content.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentRequest $request)
    {
        $requestData = $request->all();

        try {
            $data = [
                'name' => isset($requestData['params']) && isset($requestData['params']['name'])
                    ? $requestData['params']['name']
                    : $requestData['sub_type'],
                'slug' => isset($requestData['params']) && isset($requestData['params']['slug'])
                    ? $requestData['params']['slug']
                    : $requestData['sub_type'],
                'type' => $requestData['type'],
                'sub_type' => isset($requestData['sub_type']) ? $requestData['sub_type'] : null,
                'content' => $requestData['content'],
                'locale' => $requestData['locale'],
            ];

            $record = $this->activeRepo->create($data);

            if(isset($requestData['params'])
                && isset($requestData['params']['contentable-type'])
                && isset($requestData['params']['contentable-id'])
                && isset($requestData['params']['step'])){

                $lastStep = 0;

                if($requestData['params']['contentable-type'] === 'apartment') {
                    $lastStep = 5;
                    $apartment = $this->apartment->get($requestData['params']['contentable-id']);
                    $apartment->contents()->syncWithoutDetaching([$record->id]);

                    if(isset($requestData['params']['step'])) {
                        if($requestData['params']['step'] >= 2) {
                            $requestData['params']['locale'] = array_keys(config('app.locales'))[1];
                        }

                        $requestData['params']['content-sub-type'] = 'details';
                        if($requestData['params']['step'] % 2 === 1) {
                            $requestData['params']['content-sub-type'] = 'how much';
                        }

                        $requestData['params']['step']++;
                    }
                } else if($requestData['params']['contentable-type'] === 'blog') {
                    $lastStep = 3;
                    $blog = $this->blog->get($requestData['params']['contentable-id']);
                    $blog->contents()->syncWithoutDetaching([$record->id]);

                    if(isset($requestData['params']['step'])) {
                        if($requestData['params']['step'] >= 1) {
                            $requestData['params']['locale'] = array_keys(config('app.locales'))[1];
                            $requestData['params']['name'] = str_replace(
                                $record->locale,
                                array_keys(config('app.locales'))[1],
                                $requestData['params']['name']);
                            $requestData['params']['slug'] = str_replace(
                                $record->locale,
                                array_keys(config('app.locales'))[1],
                                $requestData['params']['slug']);
                        }
                    }

                    $requestData['params']['step']++;

                    if(isset($record) && isset($record->id)) {
                        $requestData['params']['submitted'] = true;
                    }
                }

                if($requestData['params']['step'] < $lastStep) {
                    return redirect()->route('content.create', $requestData['params']);
                }
            }

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        if (isset($requestData['params']) && !empty($requestData['params']['contentable-type'])) {
            $returnTo = $requestData['params']['contentable-type'];
            return redirect(route("$returnTo.index"));
        } else {
            return redirect(route('content.index'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //getSubTypes
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Content $content
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Content $content, Request $request)
    {
        $params['contentable-id'] = request()->query('contentable-id', null);
        $params['contentable-type'] = request()->query('contentable-type', 'apartment');
        $params['content'] = $content->id;

        $data['route'] = route('content.update', $params);
        $data['title'] = ' ';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $content;
        $data['contentTypes'] = $this->content->getTypes();
        $data['contentSubTypes'] = $this->content->getSubTypes();
        $data['locales'] = array_flip(config('app.locales'));
        $data['params'] = $params;

        return view('admin.pages.content.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param UpdateContentRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update($id, UpdateContentRequest $request)
    {
        $requestData = $request->all();

        try {
            $data = [
                'type' => $requestData['type'],
                'sub_type' => isset($requestData['sub_type']) ? $requestData['sub_type'] : null,
                'content' => $requestData['content'],
                'locale' => $requestData['locale'],
            ];

            if(isset($requestData['sub_type'])) {
                $data['name'] = $requestData['sub_type'];
                $data['slug'] = $requestData['sub_type'];
            }

            $this->activeRepo->findAndUpdate($id, $data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        if (isset($requestData['params']) && !empty($requestData['params']['contentable-type'])) {
            $returnTo = $requestData['params']['contentable-type'];
            return redirect(route("$returnTo.edit", ["$returnTo" => $requestData['params']['contentable-id']]));
        } else {
            return redirect(route('content.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $error = [];
        try {
            $model = \App\Entities\Content::find($id);
            if (!$model->hasRelationship()) {
                return parent::destroy($id);
            }
            $error['message'] = "Can't delete the record since this option is already assigned. ".
                "Please remove the relationship before deleting this record";
        } catch (\Exception $e) {
            $error['message'] = $e->getMessage();
        }
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'Something went wrong',
            null,
            [$error],
            200
        );
    }

    public function generateLinks($params)
    {
        $baseUrl = null;
        $links = [
            'back'  => null,
            'next'  => null,
        ];

        if($params['contentable-type'] === 'blog') {
            $baseUrl = route('content.create');
            if($params['step'] != 1 && !$params['submitted']) {
                $links['back'] = url()->previous();
            }

            if(isset($params['step'])) {
                if($params['step'] == 1) {
                    $params['name'] = str_replace(
                        $params['locale'],
                        array_keys(config('app.locales'))[$params['step']],
                        $params['name']);
                    $params['slug'] = str_replace(
                        $params['locale'],
                        array_keys(config('app.locales'))[$params['step']],
                        $params['slug']);
                    $params['locale'] = array_keys(config('app.locales'))[$params['step']];

                    $params['step']++;

                    $links['next'] = $baseUrl.'?'.http_build_query($params);
                } else if($params['step'] > 1) {
                    $links['next'] = null;
                }
            }
        }
        session(['links' => $links]);
    }

    public function getLinks()
    {
        return session('links');
    }
}
