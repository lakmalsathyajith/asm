<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Apartment extends Model
{
    use SoftDeletes;
    use HasSlug;

    protected $fillable = [
        'id',
        'name',
        'address',
        'type_id',
        'map_url',
        'parking_slots',
        'bath_rooms',
        'beds',
        'price',
        'rms_key',
        'suburb',
        'state',
        'rms_apartment_id',
        'meta',
        'meta_description',
        'slug',
    ];

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

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

    public function metas()
    {
        return $this->morphMany('App\Entities\Meta', 'metable');
    }
}
