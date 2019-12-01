<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IdentityRequired implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $request = request()->all();
        $index = explode('.', $attribute)[1];

        if (isset($request['occupants']) && isset($request['occupants'][$index])) {
            $occupants = $request['occupants'][$index];
            if(isset($occupants['is_primary'])
                && $occupants['is_primary'] === false
                && isset($occupants['type'])
                && $occupants['type'] === "ADULT") {
                return false;
            }
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
