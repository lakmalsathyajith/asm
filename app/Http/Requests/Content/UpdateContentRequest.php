<?php

namespace App\Http\Requests\Content;

use App\Http\Requests\AbstractRequest;

class UpdateContentRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => "required|min:3|max:100",
            'slug'              => "required|min:3|max:100",
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
