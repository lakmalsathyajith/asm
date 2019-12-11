<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Http\Controllers\AbstractController;
use App\Http\Controllers\Api\AbstractApiController;
use Illuminate\Http\Request;
use App\Processors\Rms\GetAvailabilityRatesApiRequestProcessor;
use Illuminate\Support\Facades\DB;

class ApartmentController extends AbstractApiController
{
    function __construct(
        ApartmentInterface $apartmentRepoInstance
    ) {
        $this->activeRepo = $apartmentRepoInstance;
    }

    function index()
    {
        try {
            $data = $this->activeRepo
                ->with('files')
                ->with('options')
                ->with('type')
                ->get();
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $data
            );
        } catch (\Exception $e) {
            return $this->returnResponse();
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
        return $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('options')
            ->with('type')
            ->findOrFail($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int[] $ids
     * @return \Illuminate\Http\Response
     */
    public function showMany(Request $request)
    {
        $data = $request->all();
        $rms_data = $data['rms_ids'];
        $area_ids = array_column($rms_data, 'id');

        $query = $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('options')
            ->with('type');
        if ($data['type']) {
            $query = $query->whereHas('type', function ($q) use ($data) {
                $q->where('tag', $data['type']);
            });
        }
        if ($data['state']) {
            $query = $query->where('state', $data['state']);
        }
        if ($data['suburb']) {
            $query = $query->where('suburb', $data['suburb']);
        }
        if ($data['price_min'] && $data['price_max']) {
            $price_min = $data['price_min'];
            $price_max = $data['price_max'];
            if ($price_min == 'Any' && $price_max != 'Any') { 
                $query = $query->where('price','<=', (float)substr($price_max, 1));
            }else if ($price_min != 'Any' && $price_max == 'Any') { 
                $query = $query->where('price','>=', (float)substr($price_min, 1));
            }else if($price_min != 'Any' && $price_max != 'Any'){
                $query = $query->where('price','<=', (float)substr($price_max, 1))->where('price','>=', (float)substr($price_min, 1));
            }
        }
        $apartments = $query->whereIn('rms_key',  $area_ids)->get();
        $apartments_array = [];
        foreach ($apartments as $apartment) {
            // $element = array_search(strval($apartment->rms_key), array_column($rms_data, 'id'));
            // $apartment['price'] = $rms_data[$element]['price'];
            $apartments_array[] = $apartment;
        }
        return $apartments_array;
    }

    public function getAvailableRoomTypes()
    {

        $response = $this->makeRmsRequest(new GetAvailabilityRatesApiRequestProcessor());
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'user added successfully',
            $response,
            200
        );
    }

    public function getStates()
    {
        try {
            $states = DB::table('postal_codes')->distinct('state_name')->orderBy('state_name', 'asc')->pluck('state_name')->toArray();
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $states
            );
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }

    public function getSuburb(Request $request)
    {
        try {
            $data = $request->all();
            $states = DB::table('postal_codes')->where('state_name', $data['state'])->orderBy('suburb', 'asc')->distinct('suburb')->pluck('suburb')->toArray();
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $states
            );
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }
}
