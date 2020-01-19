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
            'name.required' => 'The title field is required.',
            'name.min' => 'The title must be at least 3 characters.',
            'name.max' => 'The title may not be greater than 250 characters.'
        ];
    }
}
