<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'content'
    ];

    /**
     * The attributes that are considered as types
     *
     * @var array
     */
    protected $types = [
        'General' => 'GENERAL',
        'Apartment' => 'APARTMENT',
        'Option' => 'OPTION',
        'Page' => 'PAGE'
    ];

    /**
     * Get content types or get single contact
     *
     * @param $type
     * @param bool $invert
     * @return array
     */
    public function getTypes($type = null, $invert = false)
    {
        $types = $this->types;

        if ($invert) {
            $types = array_flip($this->types);
        }

        if (!$type) {
            return $types;
        }

        if (isset($types[$type])) {
            return $types[$type];
        }

        return null;
    }
}
