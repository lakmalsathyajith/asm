<?php

namespace App\Http\Requests\Blog;

use App\Http\Requests\AbstractRequest;

class StoreBlogRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        $rules =  [
            'name'              => 'required|min:3|max:250',
            'date'              => "required|date",
            'description'       => 'required|max:250',
            'files'             => 'required',
        ];

        return $rules;
    }

    // validation messages
    public function messages()
    {
        return [
        ];
    }
}
