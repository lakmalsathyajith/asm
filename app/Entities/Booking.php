<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'rms_reference',
        'uuid',
        'apartment_id',
        'adults',
        'children',
        'check_in',
        'check_out',
        'rent',
        'status'
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
