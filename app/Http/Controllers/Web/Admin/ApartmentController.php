<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Contracts\RepoInterfaces\ContentInterface;
use App\Contracts\RepoInterfaces\FileInterface;
use App\Contracts\RepoInterfaces\OptionInterface;
use App\Contracts\RepoInterfaces\TypeInterface;
use App\Entities\Apartment;
use App\Entities\Content;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Apartment\StoreApartmentRequest;
use App\Http\Requests\Apartment\UpdateApartmentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApartmentController extends AbstractController
{

    private $content;
    private $contentModel;
    private $file;
    private $option;
    private $type;

    function __construct(
        ApartmentInterface $apartmentRepoInstance,
        ContentInterface $contentRepoInstance,
        FileInterface $fileRepoInstance,
        OptionInterface $optionRepoInstance,
        TypeInterface $typeRepoInstance,
        Content $contentModel
    ) {
        $this->middleware('auth');

        $this->activeRepo = $apartmentRepoInstance;
        $this->content = $contentRepoInstance;
        $this->contentModel = $contentModel;
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
        $data['title'] = '';
        $data['records'] = Apartment::orderBy('id', 'desc')->get();
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
        $data['title'] = '';
        $data['action'] = 'Create';
        $data['files'] = $this->file->pluck('name');
        $data['types'] = $this->type->pluck('name');
        $data['options'] = $this->option->pluck('name');

        $data['counts'] = [];
        foreach (['file', 'type', 'option'] as $value) {
            if (count($data[$value . 's']) === 0) {
                array_push($data['counts'], $value);
            }
        }
        $states = DB::table('postal_codes')->distinct('state_name')->pluck('state_name')->toArray();
        $data['states'] = $states;
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
        $data = null;

        try {
            $data = [
                'name' => $requestData['name'],
                'address' => $requestData['address'],
                'type_id' => $requestData['type'],
                'map_url' => $requestData['map_url'],
                'parking_slots' => $requestData['parking_slots'],
                'beds' => $requestData['beds'],
                'bath_rooms' => $requestData['bath_rooms'],
                'rms_key' => $requestData['rms_key'],
                'rms_apartment_id' => $requestData['rms_apartment_id'],
                'state' => $requestData['state'],
                'suburb' => $requestData['suburb'],
                'price' => $requestData['price'],
                'meta' => $requestData['meta'],
                'meta_description' => $requestData['meta_description'],
                'slug' => $requestData['slug'],
            ];

            $data = $this->activeRepo->create($data);
            $data->files()->sync($requestData['files']);
            $data->options()->sync($requestData['options']);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        $queryParams['contentable-id'] = $data->id;
        $queryParams['contentable-type'] = 'apartment';
        $queryParams['content-type'] = 'apartment';
        $queryParams['content-sub-type'] = 'details';
        $queryParams['step'] = 1;
        $queryParams['locale'] = array_keys(config('app.locales'))[0];
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
     * @param Apartment $apartment
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Apartment $apartment)
    {
        $data['route'] = route('apartment.update', [
            'apartment' => $apartment->id
        ]);
        $data['scope'] = [
            [
                'locale' => array_keys(config('app.locales'))[0],
                'sub_type' => 'Details'
            ], [
                'locale' => array_keys(config('app.locales'))[0],
                'sub_type' => 'How Much'
            ], [
                'locale' => array_keys(config('app.locales'))[1],
                'sub_type' => 'Details'
            ], [
                'locale' => array_keys(config('app.locales'))[1],
                'sub_type' => 'How Much'
            ],
        ];
        $data['title'] = '';
        $data['action'] = 'Update';
        $data['method'] = 'PUT';
        $data['record'] = $apartment->load('contents');
        $data['files'] = $this->file->pluck('name');
        $data['types'] = $this->type->pluck('name');
        $data['options'] = $this->option->pluck('name');
        $states = DB::table('postal_codes')->distinct('state_name')->pluck('state_name')->toArray();
        $data['states'] = $states;
        $data['noRecord'] = [];
        foreach ($data['scope'] as $s) {
            $hasRec = false;
            if(isset($data['record']->contents)) {
                foreach ($data['record']->contents as $rec) {
                    if($rec->locale === $s['locale'] && $rec->sub_type === $this->contentModel->getSubTypes()[$s['sub_type']]) {
                        $hasRec = true;
                        continue;
                    }
                }
            }
            if(!$hasRec) {
                array_push($data['noRecord'], $s);
            }
        }
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
                'bath_rooms' => $requestData['bath_rooms'],
                'rms_key' => $requestData['rms_key'],
                'rms_apartment_id' => $requestData['rms_apartment_id'],
                'state' => $requestData['state'],
                'suburb' => $requestData['suburb'],
                'price' => $requestData['price'],
                'meta' => $requestData['meta'],
                'meta_description' => $requestData['meta_description'],
                'slug' => $requestData['slug'],
            ];

            $apartment = $this->activeRepo->get($id);
            $this->activeRepo->update($apartment, $data);
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
            $model->options()->detach();
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

    public function getSuburb(Request $request)
    {
        try {
            $data = $request->all();
            $states = DB::table('postal_codes')->where('state_name', $data['state'])->distinct('suburb')->pluck('suburb')->toArray() ;
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $states);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }
}
