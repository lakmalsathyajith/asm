<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'sub_type',
        'content',
        'locale'
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

    protected $subTypes = [
        'APARTMENT' => [
            'Select Sub Type'   => null,
            'Details'   => 'DETAILS',
            'How Much'  => 'HOW_MUCH',
        ]
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

    public function getSubTypes($category = 'APARTMENT')
    {
        return $this->subTypes[$category];
    }

    public function hasRelationship()
    {
        $count = Content::where('contents.id', $this->id)
            ->join('contentables', 'contents.id', '=', 'contentables.content_id')
            ->count();

        return ($count > 0);
    }
}
