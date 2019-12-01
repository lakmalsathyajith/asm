<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\BookingInterface;
use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\Booking\StoreBookingApiRequest;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Auth;

class BookingController extends AbstractApiController
{
    function __construct(
        BookingInterface $bookingRepoInstance
    )
    {
        $this->activeRepo = $bookingRepoInstance;
    }

    public function store(StoreBookingApiRequest $request)
    {
        $requestData = $request->all();
        $data = null;

        try {
            $data = [
                'rms_reference' => $requestData['rms_reference'],
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
}
