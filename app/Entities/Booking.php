<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = ['booking_id', 'apartment_id', 'primary_occupant_id', 'check_in',
        'check_out', 'adults', 'children', 'total_rent', 'total_days'];

    public function occupants()
    {
        return $this->hasMany('App\Entities\Occupant');
    }
}
