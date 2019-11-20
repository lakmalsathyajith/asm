<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Http\Controllers\AbstractController;
use App\Http\Controllers\Api\AbstractApiController;
use Illuminate\Http\Request;
use App\Processors\Rms\GetAvailabilityRatesApiRequestProcessor;

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
        $ids = $request->all();
        return $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('options')
            ->with('type')
            ->whereIn('rms_key', $ids)->get();
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
}
