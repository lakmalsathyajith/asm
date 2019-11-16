<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\ContentInterface;
use App\Entities\Apartment;
use App\Entities\Content;
use App\Http\Controllers\AbstractController;
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
        $data['title'] = 'Content';
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
        $data['title'] = 'Content';
        $data['action'] = 'Create';
        $data['contentTypes'] = $this->content->getTypes();
        return view('admin.pages.content.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $data = [
            'name' => $requestData['name'],
            'slug' => $requestData['slug'],
            'type' => $requestData['type'],
            'content' => $requestData['content'],
        ];

        $data = $this->activeRepo->create($data);
        $error = false;

        if ($error) {
            return view('admin.pages.content.create', $data);
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
        //
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
        $data['title'] = 'Content';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $content;
        $data['contentTypes'] = $this->content->getTypes();
        return view('admin.pages.content.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $data = [
            'name' => $requestData['name'],
            'slug' => $requestData['slug'],
            'type' => $requestData['type'],
            'content' => $requestData['content'],
        ];

        $this->activeRepo->findAndUpdate($id, $data);
        $error = false;

        $data['record'] = $this->activeRepo->get($id);
        if ($error) {
            return view('admin.pages.content.edit', $data);
        }

        return redirect(route('content.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
