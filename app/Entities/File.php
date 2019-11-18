<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'uuid',
//        'path',
        'name',
        'extension',
        'size',
        'mime',
        'url',
        'user_id'
    ];
}
