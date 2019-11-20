<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'class_name'
    ];

    public function apartments()
    {
        return $this->belongsToMany('App\Entities\Apartment');
    }

}
