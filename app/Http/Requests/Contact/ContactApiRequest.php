<?php

namespace App\Http\Requests\Contact;

use App\Http\Requests\AbstractRequest;

class ContactApiRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'first_name'      => 'required',
            'last_name'            => 'required',
            'email'          => 'required|email',
            'phone'          => 'required',
            'enquiry_type'          => 'required',
        ];
    }

    // validation messages
    public function messages()
    {
        return [
            'first_name'             => 'First name field is required',
            'last_name'             => 'Last name field is required',
            'enquiry_type'             => 'Enquiry type field is required'
        ];
    }
}
