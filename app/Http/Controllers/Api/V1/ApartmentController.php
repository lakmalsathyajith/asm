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
    )
    {
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
                $data);
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
        $query = $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('options')
            ->with('type');
            if($data['type']){
                $query = $query->whereHas('type', function ($q) use($data) {
                    $q->where('tag', $data['type']);
                 });
            }
            if($data['state']){
                $query = $query->where('state',$data['state']);
            }
            if($data['suburb']){
                $query = $query->where('suburb',$data['suburb']);
            }
        return $query->whereIn('rms_key',  $data['rms_ids'])->get();
    }

    public function getAvailableRoomTypes(){

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
            $states = DB::table('postal_codes')->distinct('state_name')->pluck('state_name')->toArray() ;
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $states);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
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
