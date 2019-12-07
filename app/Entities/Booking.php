<?php

namespace App\Entities;

use App\Traits\DateTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    use DateTrait;

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
        'status',
        'agent'
    ];

    protected $bookingStatus = [
        'complete' => "COMPLETED",
        'incomplete' => "INCOMPLETE"
    ];

    // accessors

    public function getFormattedStatusAttribute()
    {
        return isset(array_flip($this->bookingStatus)[$this->status]) ?
            ucfirst(array_flip($this->bookingStatus)[$this->status])
            : null;
    }

    public function getFormattedCheckInAttribute()
    {
        return DateTrait::formatDate($this->check_in);
    }

    public function getFormattedCheckOutAttribute()
    {
        return DateTrait::formatDate($this->check_out);
    }


    // relationships

    public function apartment()
    {
        return $this->belongsTo('App\Entities\Apartment');
    }

    public function occupants()
    {
        return $this->hasMany('App\Entities\Occupant');
    }

    public function user()
    {
        return $this->belongsTo('App\Entities\User');
    }
}
