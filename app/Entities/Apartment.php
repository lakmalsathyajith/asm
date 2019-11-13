<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'name', 'address'
    ];
}
