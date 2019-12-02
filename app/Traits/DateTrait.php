<?php

namespace App\Traits;




use Illuminate\Support\Carbon;

Trait DateTrait
{
    public static function formatDate($time, $format = 'Y-m-d')
    {
        return Carbon::parse($time)
            ->format($format);
    }

    public static function futureDate($future = 'P5D', $format = 'Y-m-d')
    {
        $now = Carbon::now();
        return Carbon::create($now->year, $now->month, $now->day)
            ->add(new \DateInterval($future))
            ->format($format);
    }

}