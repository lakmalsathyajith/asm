<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Contracts\RepoInterfaces\ContentInterface;
use App\Contracts\RepoInterfaces\FileInterface;
use App\Contracts\RepoInterfaces\OptionInterface;
use App\Contracts\RepoInterfaces\TypeInterface;
use App\Entities\Apartment;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Apartment\StoreApartmentRequest;
use App\Http\Requests\Apartment\UpdateApartmentRequest;
use Illuminate\Http\Request;

class ApartmentController extends AbstractController
{

    private $content;
    private $file;
    private $option;
    private $type;

    function __construct(
        ApartmentInterface $apartmentRepoInstance,
        ContentInterface $contentRepoInstance,
        FileInterface $fileRepoInstance,
        OptionInterface $optionRepoInstance,
        TypeInterface $typeRepoInstance
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $apartmentRepoInstance;
        $this->content = $contentRepoInstance;
        $this->file = $fileRepoInstance;
        $this->option = $optionRepoInstance;
        $this->type = $typeRepoInstance;
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
        $data['files'] = $this->file->pluck('name');
        $data['types'] = $this->type->pluck('name');
        $data['options'] = $this->option->pluck('name');

        $data['counts'] = [];
        foreach (['content', 'file', 'type', 'option'] as $value) {
            if (count($data[$value . 's']) === 0) {
                array_push($data['counts'], $value);
            }
        }

        return view('admin.pages.apartment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreApartmentRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartmentRequest $request)
    {
        $requestData = $request->all();

        try {
            $data = [
                'name' => $requestData['name'],
                'address' => $requestData['address'],
                'type_id' => $requestData['type'],
                'map_url' => $requestData['map_url'],
                'parking_slots' => $requestData['parking_slots'],
                'beds' => $requestData['beds'],
                'rms_key' => $requestData['rms_key']
            ];

            $data = $this->activeRepo->create($data);
            $data->contents()->sync($requestData['contents']);
            $data->files()->sync($requestData['files']);
            $data->options()->sync($requestData['options']);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('apartment.index'));
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
        $data['files'] = $this->file->pluck('name');
        $data['types'] = $this->type->pluck('name');
        $data['options'] = $this->option->pluck('name');
        return view('admin.pages.apartment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param UpdateApartmentRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, UpdateApartmentRequest $request)
    {
        $requestData = $request->all();

        try {
            $data = [
                'name' => $requestData['name'],
                'address' => $requestData['address'],
                'type_id' => $requestData['type'],
                'map_url' => $requestData['map_url'],
                'parking_slots' => $requestData['parking_slots'],
                'beds' => $requestData['beds'],
                'rms_key' => $requestData['rms_key']
            ];

            $apartment = $this->activeRepo->get($id);
            $this->activeRepo->update($apartment, $data);
            $apartment->contents()->sync($requestData['contents']);
            $apartment->files()->sync($requestData['files']);
            $apartment->options()->sync($requestData['options']);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        $data['record'] = $this->activeRepo->get($id);

        return redirect(route('apartment.index'));
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
