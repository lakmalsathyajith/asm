<?php

namespace App\Http\Requests\Content;

use App\Http\Requests\AbstractRequest;

class StoreContentRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        $locales = implode(',', array_keys(config('app.locales')));

        return [
            'type'              => 'required',
            'sub_type'          => 'required_if:type,APARTMENT',
            'locale'            => "required|in:$locales",
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
