<?php

namespace App\Http\Requests\Option;

use App\Http\Requests\AbstractRequest;

class UpdateOptionRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => "required|min:3|max:100|unique:options,name,{$this->route()->option},id",
            'description'       => 'required',
            'class_name'        => 'max:25',
        ];
    }

    // validation messages
    public function messages()
    {
        return [
        ];
    }
}
