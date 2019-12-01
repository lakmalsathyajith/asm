<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OccupantIdentity extends Model
{
    use SoftDeletes;

    protected $table = 'occupant_identities';

    protected $fillable = [
        'occupant_id',
        'identity_type',
        'identity_number',
        'identity_issued_by',
        'next_of_kin',
        'kin_relationship',
        'kin_email',
        'kin_address',
        'kin_land_phone',
        'kin_mobile_phone',
        'emp_department',
    ];

    public function apartment()
    {
        $this->belongsTo('App\Entities\Apartment');
    }

    public function occupants()
    {
        $this->hasMany('App\Entities\Occupant');
    }
}
