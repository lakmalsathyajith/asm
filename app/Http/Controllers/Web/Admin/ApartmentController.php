<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Contracts\RepoInterfaces\ContentInterface;
use App\Entities\Apartment;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;

class ApartmentController extends AbstractController
{

    private $content;

    function __construct(
        ApartmentInterface $apartmentRepoInstance,
        ContentInterface $contentRepository
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $apartmentRepoInstance;
        $this->content = $contentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Apartment';
        $data['records'] = $this->activeRepo->all();
        return view('admin.pages.apartment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route'] = route('apartment.store');
        $data['title'] = 'Apartment';
        $data['action'] = 'Create';
        $data['contents'] = $this->content->pluck('name');
        return view('admin.pages.apartment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        $data = [
            'name' => $requestData['name'],
            'address' => $requestData['address'],
        ];

        $data =  $this->activeRepo->create($data);
        $data->contents()->sync($requestData['contents']);
        $error = false;

       if ($error) {
           return view('admin.pages.apartment.create', $data);
       }

       return redirect(route('apartment.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Apartment $apartment
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Apartment $apartment)
    {
        $data['route'] = route('apartment.update', [
            'apartment' => $apartment->id
        ]);
        $data['title'] = 'Apartment';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $apartment->load('contents');
        $data['contents'] = $this->content->pluck('name');
        return view('admin.pages.apartment.edit', $data);
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
            'address' => $requestData['address'],
        ];

        $apartment = $this->activeRepo->get($id);
        $this->activeRepo->update($apartment, $data);
        $apartment->contents()->sync($requestData['contents']);
        $error = false;

        $data['record'] = $this->activeRepo->get($id);
        if ($error) {
            return view('admin.pages.apartment.edit', $data);
        }

        return redirect(route('apartment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
