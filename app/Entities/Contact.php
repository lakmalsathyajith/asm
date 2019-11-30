<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'type', 'contact'
    ];

    /**
     * The attributes that are considered as types
     *
     * @var array
     */
    protected $types = [
        'address'       => 'ADDRESS',
        'mobile_phone'  => 'MOBILE_PHONE',
        'home_phone'    => 'HOME_PHONE'
    ];

    /**
     * Get contact types or get single contact
     *
     * @param $type
     * @return array
     */
    public function getTypes($type)
    {
        if(!$type){
            return $this->types;
        }

        if(isset($this->types[$type])){
            return $this->types[$type];
        }

        return null;
    }
}
