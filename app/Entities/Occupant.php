<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occupant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'booking_id',
        'first_name',
        'last_name',
        'type',
        'is_primary',
    ];

    protected $types = [
        'adult' => 'ADULT',
        'child' => 'CHILD'
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

    public function booking()
    {
        $this->belongsTo('App\Entities\Booking');
    }
}
