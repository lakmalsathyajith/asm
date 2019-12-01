<?php

namespace App\Http\Requests\Booking;

use App\Http\Requests\AbstractRequest;

class StoreBookingApiRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'apartment_id'      => 'required|integer',
            'adults'            => 'required|min:0|max:99|',
            'children'          => 'required|min:0|max:99|',
            'check_in'          => 'required|date',
            'check_out'         => 'required|date',
            'rent'              => 'required'
        ];
    }

    // validation messages
    public function messages()
    {
        return [
        ];
    }
}
