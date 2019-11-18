<?php

namespace App\Http\Requests\Type;

use App\Http\Requests\AbstractRequest;

class StoreTypeRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => 'required|min:3|max:100|unique:types,name',
            'tag'               => 'required|min:3|max:100|unique:types,tag',
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
