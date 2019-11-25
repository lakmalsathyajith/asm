<?php

namespace App\Http\Requests\Booking;

use App\Http\Requests\AbstractRequest;

class StoreBookingRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'check_in' => 'required',
            'check_out' => 'required',
            'adults' => 'required',
        ];
    }

    // validation messages
    public function messages()
    {
        return [
            'files' => 'Images field is required'
        ];
    }
}
