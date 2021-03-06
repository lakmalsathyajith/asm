<?php

namespace App\Http\Requests\Apartment;

use App\Http\Requests\AbstractRequest;

class StoreApartmentRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        $rules =  [
            'name'              => 'required|min:3|max:100',
            'address'           => 'required|max:255',
            'type'              => 'required',
            'map_url'           => 'required',
            'parking_slots'     => 'required|integer|max:99|min:0',
            'beds'              => 'required|integer|max:99|min:0',
            'bath_rooms'        => 'required|integer|max:99|min:0',
            'files'             => 'required',
            'options'           => 'required',
            'price'           => 'required',
            'rms_key'           => 'required|max:50',
            // 'rms_key'           => 'required|max:50|unique:apartments,rms_key',
        ];

        return $rules;
    }

    // validation messages
    public function messages()
    {
        return [
            'files'             => 'Images field is required',
            'parking_slots.integer'=> 'Parking slots must be a number',
            'beds.integer'      => 'Beds rooms must be a number',
            'bath_rooms.integer'=> 'Bath rooms must be a number',
        ];
    }
}
