<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\BlogInterface;
use App\Contracts\RepoInterfaces\FileInterface;
use App\Entities\Blog;
use App\Entities\Content;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends AbstractController
{

    private $file;
    private $contentModel;

    function __construct(
        BlogInterface $blogRepoInstance,
        FileInterface $fileRepoInstance,
        Content $contentModel
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $blogRepoInstance;
        $this->file = $fileRepoInstance;
        $this->contentModel = $contentModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = '';
        $data['records'] = Blog::orderBy('id', 'desc')->get();
        return view('admin.pages.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route'] = route('blog.store');
        $data['title'] = '';
        $data['action'] = 'create';
        $data['files'] = $this->file->pluck('name');
        $data['locales'] = array_flip(config('app.locales'));
        return view('admin.pages.blog.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $requestData = $request->all();
        $data = null;
        $meta = [];

        try {
            DB::beginTransaction();

            $data = [
                'name' => $requestData['name'],
                'name_zh' => $requestData['name_zh'],
                'slug' => str_replace(' ', '_', $requestData['name']),
                'description' => $requestData['description'],
                'description_zh' => $requestData['description_zh'],
                'date' => $requestData['date'],
            ];

            $data = $this->activeRepo->create($data);
            if(isset($requestData['files'])) {
                $data->files()->sync($requestData['files']);
            }

            if(isset($requestData['meta']) && is_array($requestData['meta']) && count($requestData['meta']) > 0) {
                foreach ($requestData['meta'] as $key => $values) {
                    if(isset($values['name'])) {
                        $granule = [];
                        $granule['locale'] = $key;
                        $granule['name'] = $values['name'];
                        $granule['description'] = $values['description'];
                        array_push($meta, $granule);
                    }
                }
                if(count($meta) > 0) {
                    $data->metas()->createMany($meta);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
             DB::rollBack();
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        $queryParams['contentable-id'] = $data->id;
        $queryParams['contentable-type'] = 'blog';
        $queryParams['content-type'] = 'blog';
        $queryParams['content-sub-type'] = null;
        $queryParams['step'] = 1;
        $queryParams['locale'] = array_keys(config('app.locales'))[0];
        $queryParams['name'] = $data->name.' '.$queryParams['locale'];
        $queryParams['slug'] = $data->slug.'_'.$queryParams['locale'];
        return redirect()->route('content.create', $queryParams);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Blog $blog)
    {
        $data['route'] = route('blog.update', [
            'blog' => $blog->id
        ]);
        $data['scope'] = [
            ['locale' => array_keys(config('app.locales'))[0]],
            ['locale' => array_keys(config('app.locales'))[1]],
        ];

        $data['title'] = '';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $blog->load([
            'contents',
            'metas'
        ]);
        $data['files'] = $this->file->pluck('name');
        $data['locales'] = array_flip(config('app.locales'));
        $states = DB::table('postal_codes')->distinct('state_name')->pluck('state_name')->toArray();
        $data['states'] = $states;
        $data['noRecord'] = [];
        foreach ($data['scope'] as $s) {
            $hasRec = false;
            if(isset($data['record']->contents)) {
                foreach ($data['record']->contents as $rec) {
                    if($rec->locale === $s['locale']) {
                        $hasRec = true;
                        continue;
                    }
                }
            }
            if(!$hasRec) {
                array_push($data['noRecord'], $s);
            }
        }
        return view('admin.pages.blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update($id, UpdateBlogRequest $request)
    {
        $requestData = $request->all();
        $meta = [];

        try {
            $data = [
                'name' => $requestData['name'],
                'name_zh' => $requestData['name_zh'],
                'slug' => str_replace(' ', '_', $requestData['name']),
                'description' => $requestData['description'],
                'description_zh' => $requestData['description_zh'],
                'date' => $requestData['date'],
            ];

            $blog = $this->activeRepo->get($id);
            $this->activeRepo->update($blog, $data);
            $blog->files()->sync($requestData['files']);
            $blog->metas()->delete();
            if(isset($requestData['meta']) && is_array($requestData['meta']) && count($requestData['meta']) > 0) {
                foreach ($requestData['meta'] as $key => $values) {
                    if(isset($values['name'])) {
                        $granule = [];
                        $granule['locale'] = $key;
                        $granule['name'] = $values['name'];
                        $granule['description'] = $values['description'];
                        array_push($meta, $granule);
                    }
                }
                if(count($meta) > 0) {
                    $blog->metas()->createMany($meta);
                }
            }
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('blog.index'));
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
            $model = $this->activeRepo->get($id);
            $model->contents()->detach();
            $model->files()->detach();
            $model->metas()->delete();
            return parent::destroy($id);
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
