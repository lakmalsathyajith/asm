<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\ContentInterface;
use App\Entities\Apartment;
use App\Entities\Content;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Content\StoreContentRequest;
use App\Http\Requests\Content\UpdateContentRequest;
use Illuminate\Http\Request;

class ContentController extends AbstractController
{

    private $content;

    function __construct(
        ContentInterface $contentRepoInstance,
        Content $content
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $contentRepoInstance;
        $this->content = $content;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Content Manager';
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
        $data['route'] = route('content.store');
        $data['title'] = 'Content Manager';
        $data['action'] = 'Create';
        $data['contentTypes'] = $this->content->getTypes();
        $data['contentSubTypes'] = $this->content->getSubTypes();
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
                'name' => $requestData['name'],
                'slug' => $requestData['slug'],
                'type' => $requestData['type'],
                'sub_type' => isset($requestData['sub_type']) ? $requestData['sub_type'] : null,
                'content' => $requestData['content'],
            ];

            $this->activeRepo->create($data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('content.index'));
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
    public function edit(Content $content)
    {
        $data['route'] = route('content.update', [
            'content' => $content->id
        ]);
        $data['title'] = 'Content Manager';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $content;
        $data['contentTypes'] = $this->content->getTypes();
        $data['contentSubTypes'] = $this->content->getSubTypes();
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
                'name' => $requestData['name'],
                'slug' => $requestData['slug'],
                'type' => $requestData['type'],
                'sub_type' => isset($requestData['sub_type']) ? $requestData['sub_type'] : null,
                'content' => $requestData['content'],
            ];

            $this->activeRepo->findAndUpdate($id, $data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('content.index'));
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
}
