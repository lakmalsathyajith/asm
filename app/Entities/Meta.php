<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meta extends Model
{

    protected $table = 'metable';

    protected $fillable = [
        'name',
        'description',
        'locale',
        'metable_id',
        'metable_type'
    ];
}
