<?php

namespace App\Http\Requests;

use App\Exceptions\CustomException;
use App\Traits\ResponseTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AbstractRequest extends FormRequest
{
    use ResponseTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    // validation fail response
    public function failedValidation(Validator $validator)
    {
        throw new CustomException(
            $this->returnResponse(
                $this->getResponseStatus("ERROR"),
                'Validation Failed',
                $this->input(),
                $validator->errors(),
                422
            )
        );
    }
}