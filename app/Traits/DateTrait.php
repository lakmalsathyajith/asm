<?php

namespace App\Traits;




use Illuminate\Support\Carbon;

Trait DateTrait
{
    public static function formatDate($time, $format = 'Y-m-d')
    {
        return Carbon::parse($time)->format($format);
    }

}