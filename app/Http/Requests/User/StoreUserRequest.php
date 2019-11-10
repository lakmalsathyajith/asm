<?php

namespace App\Http\Requests\User;

use App\Http\Requests\AbstractRequest;

class StoreUserRequest extends AbstractRequest
{

    // validation rules
    public function rules()
    {
        return [
            'name'              => 'required|max:255',
            'email'             => 'unique:users',
            'password'          => 'required|min:8',
            'member_number'     => 'required',
            'registered_date'   => 'required|date'
        ];
    }

    // validation messages
    public function messages()
    {
        return [
            'name'              => 'Name is required',
            'email'             => 'Email Already exists',
            'password'          => 'Password should have at least 8 characters',
            'member_number'     => 'Member Number is required',
            'registered_date'   => 'Registered date is required'
        ];
    }
}
