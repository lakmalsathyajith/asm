<?php

namespace App\Http\Requests\Occupant;

use App\Http\Requests\AbstractRequest;

class StoreOccupantRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:100|unique:apartments,name',
            'address' => 'required|max:255',
            'type' => 'required',
            'map_url' => 'required',
            'parking_slots' => 'required|integer|max:99',
            'beds' => 'required|integer|max:99',
            'contents' => 'required',
            'files' => 'required',
            'options' => 'required',
            'rms_key' => 'required|max:50|unique:apartments,rms_key',
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
