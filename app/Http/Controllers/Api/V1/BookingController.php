<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\BookingInterface;
use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\Booking\StoreBookingRequest;
use App\Processors\Rms\PostBookingQuotesApiRequestProcessor;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class BookingController
 * @package App\Http\Controllers\Api\V1
 */
class BookingController extends AbstractApiController
{
    /**
     * BookingController constructor.
     * @param BookingInterface $bookingRepoInstance
     */
    function __construct(
        BookingInterface $bookingRepoInstance
    )
    {
        $this->activeRepo = $bookingRepoInstance;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = $this->activeRepo
                ->all();
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(StoreBookingRequest $request)
    {
        $requestData = $request->all();
        $checkIn = $requestData['check_in'];
        $checkOut = $requestData['check_out'];
        $DeferenceInDays = Carbon::parse($checkIn)->diffInDays($checkOut);
        //dd($DeferenceInDays);
        $data = [
            'booking_id' => $requestData['booking_id'],
            'apartment_id' => $requestData['apartment_id'],
            'primary_occupant_id' => $requestData['primary_occupant_id'],
            'check_in' => $requestData['check_in'],
            'check_out' => $requestData['check_out'],
            'adults' => $requestData['adults'],
            'children' => $requestData['children'],
            'total_rent' => $requestData['total_rent'],
            'total_days' => $DeferenceInDays//$requestData['total_days']
        ];

        $data = $this->activeRepo->create($data);
        // $data->contents()->sync($requestData['contents']);
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'booking added successfully',
            $data,
            200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return void
     */
    public function show($id)
    {
        try {
            $data = $this->activeRepo
                ->with('occupants')
                ->find($id);
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
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getBookQuote()
    {
        $postbookingquote = $this->makeRmsRequest(new PostBookingQuotesApiRequestProcessor());
        try {
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Booking request make successfully',
                $postbookingquote,
                200
            );
        } catch (\Exception $e) {
            return $this->returnResponse(
                $this->getResponseStatus('FAILURE'),
                $e->getMessage(),
                $postbookingquote,
                200
            );
        }
    }
}
