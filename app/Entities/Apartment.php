<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'name',
        'address',
        'type_id',
        'map_url',
        'parking_slots',
        'beds',
        'rms_key'
    ];

    public function contents()
    {
        return $this->morphToMany('App\Entities\Content', 'contentable');
    }

    public function files()
    {
        return $this->morphToMany('App\Entities\File', 'fileable');
    }

    public function options()
    {
        return $this->belongsToMany('App\Entities\Option');
    }

    public function type()
    {
        return $this->belongsTo('App\Entities\Type');
    }
}
