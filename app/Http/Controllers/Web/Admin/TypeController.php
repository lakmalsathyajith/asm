<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\TypeInterface;
use App\Entities\Type;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Type\StoreTypeRequest;
use App\Http\Requests\Type\UpdateTypeRequest;
use Illuminate\Http\Request;

class TypeController extends AbstractController
{
    function __construct(
        TypeInterface $TypeRepoInstance
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $TypeRepoInstance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Type';
        $data['records'] = $this->activeRepo->all();
        return view('admin.pages.type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route'] = route('type.store');
        $data['title'] = 'Type';
        $data['action'] = 'Create';
        return view('admin.pages.type.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTypeRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {
        $requestData = $request->all();

        try {
            $data = [
                'name' => $requestData['name'],
                'tag' => $requestData['tag'],
                'description' => $requestData['description']
            ];

            $this->activeRepo->create($data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('type.index'));
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
     * @param Type $type
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Type $type)
    {
        $data['route'] = route('type.update', [
            'type' => $type->id
        ]);
        $data['title'] = 'Type';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $type;
        return view('admin.pages.type.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param UpdateTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, UpdateTypeRequest $request)
    {

        $requestData = $request->all();

        try {
            $data = [
                'name' => $requestData['name'],
                'tag' => $requestData['tag'],
                'description' => $requestData['description'],
            ];

            $this->activeRepo->findAndUpdate($id, $data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('type.index'));
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
