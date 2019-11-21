<?php

namespace App\Http\Requests\Content;

use App\Http\Requests\AbstractRequest;

class StoreContentRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => 'required|min:3|max:100|unique:contents,name',
            'slug'              => 'required|min:3|max:100,slug',
            'type'              => 'required',
            'sub_type'          => 'required_if:type,APARTMENT',
            'content'           => 'required',
        ];
    }

    // validation messages
    public function messages()
    {
        return [
        ];
    }
}
