<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'name_zh',
        'slug',
        'description',
        'description_zh',
        'date'
    ];

    public function contents()
    {
        return $this->morphToMany('App\Entities\Content', 'contentable');
    }

    public function files()
    {
        return $this->morphToMany('App\Entities\File', 'fileable');
    }

    public function metas()
    {
        return $this->morphMany('App\Entities\Meta', 'metable');
    }
}
