<?php

namespace App\Http\Requests\Option;

use App\Http\Requests\AbstractRequest;

class StoreOptionRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => 'required|min:3|max:100|unique:options,name',
            'description'       => 'required',
        ];
    }

    // validation messages
    public function messages()
    {
        return [
        ];
    }
}
