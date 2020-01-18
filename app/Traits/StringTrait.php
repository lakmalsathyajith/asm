<?php
/**
 * Created by PhpStorm.
 * User: cal
 * Date: 1/18/20
 * Time: 10:38 PM
 */

namespace App\Traits;


trait StringTrait
{
    public static function subString($str = null, $length = 20, $start = 0)
    {
        $sub = substr($str, $start, $length);
        if(strlen($str) > strlen($sub)) {
            $sub .= '...';
        }
        return $sub;
    }
}