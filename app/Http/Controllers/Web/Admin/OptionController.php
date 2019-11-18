<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\FileInterface;
use App\Contracts\RepoInterfaces\OptionInterface;
use App\Entities\Option;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Option\StoreOptionRequest;
use App\Http\Requests\Option\UpdateOptionRequest;
use Illuminate\Http\Request;

class OptionController extends AbstractController
{

    private $file;

    function __construct(
        OptionInterface $optionRepoInstance,
        FileInterface $fileRepoInstance
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $optionRepoInstance;
        $this->file = $fileRepoInstance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Option';
        $data['records'] = $this->activeRepo->all();
        return view('admin.pages.option.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route'] = route('option.store');
        $data['title'] = 'Option';
        $data['action'] = 'Create';
        $data['files'] = $this->file->pluck('name');
        return view('admin.pages.option.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOptionRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOptionRequest $request)
    {
        try {
            $requestData = $request->all();
            $data = [
                'name' => $requestData['name'],
                'description' => $requestData['description']
            ];

            $this->activeRepo->create($data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('option.index'));
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
     * @param Option $option
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Option $option)
    {
        $data['route'] = route('option.update', [
            'option' => $option->id
        ]);
        $data['title'] = 'Option';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $option;
        $data['files'] = $this->file->pluck('name');
        return view('admin.pages.option.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param UpdateOptionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, UpdateOptionRequest $request)
    {

        try {
            $requestData = $request->all();

            $data = [
                'name' => $requestData['name'],
                'description' => $requestData['description'],
            ];

            $this->activeRepo->findAndUpdate($id, $data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('option.index'));
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
