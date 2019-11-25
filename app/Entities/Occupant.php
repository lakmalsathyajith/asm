<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Occupant extends Model
{
    //
    protected $fillable = ['is_primer', 'f_name', 'l_name', 'dob', 'email', 'f_contact',
        'm_contact', 'address', 'is_employed', 'person_place', 'person_location',
        'person_contact', 'person_address', 'is_doc_passport', 'is_doc_license',
        'is_doc_visa', 'doc_id', 'doc_issue_by', 'document','booking_id'];

    public function dependants()
    {
        return $this->hasMany('App\Entities\Dependant', 'primer_id');
    }

    public function relations()
    {
        return $this->hasMany('App\Entities\Relation', 'primer_id');
    }


}
