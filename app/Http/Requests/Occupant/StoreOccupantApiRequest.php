<?php

namespace App\Http\Requests\Occupant;

use App\Entities\Occupant;
use App\Http\Requests\AbstractRequest;
use Illuminate\Support\Facades\Validator;

class StoreOccupantApiRequest extends AbstractRequest
{

    // validation rules
    public function rules(Occupant $occupant)
    {
        $type = $occupant->getTypes('adult');

        Validator::extendImplicit('identity_required', function ($attribute, $value, $parameters, $validator) use ($type) {
            $request = request()->all();
            $index = explode('.', $attribute)[1];

            if (isset($request['occupants']) && isset($request['occupants'][$index])) {
                $occupants = $request['occupants'][$index];
                if(!isset($value)
                    && isset($occupants['is_primary'])
                    && $occupants['is_primary'] === true
                    && isset($occupants['type'])
                    && $occupants['type'] === $type) {
                    return false;
                }
                return true;
            }
            return false;
        });
//

        return [
            // default occupant validation
            'booking_id'                => 'required',
            'occupants'                 => 'required|array',
            'occupants.*.first_name'    => 'required',
            'occupants.*.last_name'     => 'required',
            'occupants.*.date_of_birth' => 'required',
            'occupants.*.type'          => 'required',

            // occupant contact details validations
            'occupants.*.email'                 => "required_if:occupants.*.type,$type|email",
            'occupants.*.land_phone'            => "required_if:occupants.*.type,$type",
            'occupants.*.mobile_phone'          => "required_if:occupants.*.type,$type",
            'occupants.*.address'               => "required_if:occupants.*.type,$type",
            'occupants.*.emp_status'            => "required_if:occupants.*.type,$type",
            'occupants.*.emp_personal_address'  => "required_if:occupants.*.type,$type",
//            'occupants.*.emp_department'        => "required_if:occupants.*.type,$type",
//            'occupants.*.emp_address'           => "required_if:occupants.*.type,$type",
//            'occupants.*.emp_phone'             => "required_if:occupants.*.type,$type",

            // ocupant identity validation
            'occupants.*.identity_type'         => "identity_required",
            'occupants.*.identity_number'       => "identity_required",
            'occupants.*.identity_issued_by'    => "identity_required",
            'occupants.*.next_of_kin'           => "identity_required",
            'occupants.*.kin_relationship'      => "identity_required",
            'occupants.*.kin_address'           => "identity_required",
            'occupants.*.kin_land_phone'        => "identity_required",
            'occupants.*.kin_mobile_phone'      => "identity_required",
//            'occupants.*.kin_email'             => "required_if:occupants.*.type,$type",
        ];
    }

    // validation messages
    public function messages()
    {
        return [
            'booking_id.required'                       => 'Booking Id field is required',
            'occupants.*.first_name.required'           => 'Occupant First Name field is required',
            'occupants.*.last_name.required'            => 'Occupant Last Name field is required',
            'occupants.*.date_of_birth.required'        => 'Occupant Date of Birth field is required',
            'occupants.*.type.required'                 => 'Occupant Type field is required',

            'occupants.*.email.required_if'                => 'Occupant Email field is required',
            'occupants.*.email.email'                      => 'Occupant Email address is invalid',
            'occupants.*.land_phone.required_if'           => 'Occupant Land Phone field is required',
            'occupants.*.mobile_phone.required_if'         => 'Occupant Mobile Phone field is required',
            'occupants.*.address.required_if'              => 'Occupant Address field is required',
            'occupants.*.emp_status.required_if'           => 'Occupant Status field is required',
            'occupants.*.emp_personal_address.required_if' => 'Occupant Personal Address field is required',

            'occupants.*.identity_type.identity_required'        => 'Occupant Identity Type field is required',
            'occupants.*.identity_number.identity_required'      => 'Occupant Identity Number field is required',
            'occupants.*.identity_issued_by.identity_required'   => 'Occupant Identity Issued By field is required',
            'occupants.*.next_of_kin.identity_required'          => 'Occupant Next of Kin field is required',
            'occupants.*.kin_relationship.identity_required'     => 'Occupant\'s Kin Relationship field is required',
            'occupants.*.kin_address.identity_required'          => 'Occupant\'s Kin Address field is required',
            'occupants.*.kin_land_phone.identity_required'       => 'Occupant\'s Kin Land Phone field is required',
            'occupants.*.kin_mobile_phone.identity_required'     => 'Occupant\'s Kin Mobile Phone field is required',
        ];
    }
}
