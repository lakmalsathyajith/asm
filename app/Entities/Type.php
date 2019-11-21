<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'tag',
        'description',
    ];

    public function apartments()
    {
        return $this->hasMany('App\Entities\Apartment');
    }

}
