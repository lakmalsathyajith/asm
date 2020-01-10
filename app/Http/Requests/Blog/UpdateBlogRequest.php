<?php

namespace App\Http\Requests\Blog;

use App\Http\Requests\AbstractRequest;

class UpdateBlogRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        $rules =  [
            'name'              => "required|min:3|max:100",
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
