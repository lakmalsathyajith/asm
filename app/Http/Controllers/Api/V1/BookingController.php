<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\BookingInterface;
use App\Entities\Booking;
use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\Booking\StoreBookingApiRequest;
use App\Processors\Rms\PostBookingApiRequestProcessor;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Auth;

class BookingController extends AbstractApiController
{
    protected $booking;

    function __construct(
        Booking $booking,
        BookingInterface $bookingRepoInstance
    )
    {
        $this->booking = $booking;
        $this->activeRepo = $bookingRepoInstance;
    }

    public function show($id)
    {
        try {
            $where = [
                ['key' => 'uuid', 'op' => '=', 'val' => $id]
            ];

            //dd($where);
            //$data = $this->filter($where)
                //->with('apartment')->toSql();
               // ->with('occupants')
               // ->with('occupants.contacts')
               // ->with('occupants.identity')
                //->firstOrFail();
            $model = $this->activeRepo->getModel();
            $data = $model->where('uuid','=',$id)
                ->with('apartment')
                ->with('occupants')
                ->with('occupants.contacts')
                ->with('occupants.identity')
                ->firstOrFail();

            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'record fetched successfully',
                $data);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }

    public function store(StoreBookingApiRequest $request)
    {
        $requestData = $request->all();
        $data = null;

        try {
            $data = [
                'uuid' => HelperTrait::uuid(),
                'user_id' => Auth::id(),
                'apartment_id' => $requestData['apartment_id'],
                'adults' => $requestData['adults'],
                'children' => $requestData['children'],
                'check_in' => $requestData['check_in'],
                'check_out' => $requestData['check_out'],
                'rent' => $requestData['rent']
            ];

            $data = $this->activeRepo->create($data);
        } catch (\Exception $e) {
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Error Occurred while creating the booking',
                $data,
                [$e->getMessage()]
                ,200
            );
        }

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'booking added successfully',
            $data,
            [],
            200
        );
    }

    public function update($id)
    {
        $data = null;
        try {
            $where = [
                ['key' => 'uuid', 'op' => '=', 'val' => $id]
            ];

            $booking = $this->filter($where)
                ->with('apartment')
                ->with('occupants')
                ->with('occupants.contacts')
                ->with('occupants.identity')
                ->firstOrFail();

            $processor = new PostBookingApiRequestProcessor();
            $processor->setCustomFields($booking->toArray());
            $processor->refreshOptions();
            $response = $this->makeRmsRequest($processor);

            if(isset($response)
                && isset($response['Bookings'])
                && isset($response['Bookings']['Booking'])
                && isset($response['Bookings']['Booking']['BookingReference'])) {
                $booking->rms_reference = $response['Bookings']['Booking']['BookingReference'];
                $booking->status = 'COMPLETE';
                $booking->save();
            }

            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Booked successfully',
                $response);
        } catch (\Exception $e) {
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Error Occurred while updating the booking',
                $data,
                [$e->getMessage()]
                ,200
            );
        }
    }
}
