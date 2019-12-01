<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OccupantContact extends Model
{
    use SoftDeletes;

    protected $table = 'occupant_contacts';

    protected $fillable = [
        'occupant_id',
        'email',
        'land_phone',
        'mobile_phone',
        'address',
        'emp_status',
        'emp_phone',
        'emp_address',
        'emp_personal_address',
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
