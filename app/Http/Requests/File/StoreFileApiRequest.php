<?php

namespace App\Http\Requests\File;

use App\Http\Requests\AbstractRequest;

class StoreFileApiRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'uploads'               => 'required|file|image|max:2048'
        ];
    }

    // validation messages
    public function messages()
    {
        return [
            'uploads.required'               => 'No file is selected for uploading.',
            'uploads.image'                  => 'File myst be an image.',
            'uploads.max'                    => 'The File may not be greater than 2048 kilobytes.',
        ];
    }
}
