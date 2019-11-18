<?php

namespace App\Http\Requests\Type;

use App\Http\Requests\AbstractRequest;

class UpdateTypeRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => "required|min:3|max:100|unique:types,name,{$this->route()->type},id",
            'tag'               => "required|min:3|max:100|unique:types,tag,{$this->route()->type},id",
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
