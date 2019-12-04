<?php

namespace App\Traits;


use Illuminate\Support\Arr;

Trait HelperTrait
{
    public function generateValidationResponse($request, $exception)
    {
        return response()->json(json_decode($exception->getMessage()),422);
    }

    public static function isSelected($haystack, $needle)
    {
        if(!isset($haystack)) {
            return false;
        }

        if(gettype($haystack) === 'object') {
            $haystack = $haystack->toArray();
        }

        $inHaystack = Arr::where($haystack, function ($value, $key) use($needle) {
            return $value['id'] === $needle;
        });

        return !!(count($inHaystack) > 0);
    }

    public static function uuid($prefix = null)
    {
        if (!isset($prefix)) {
            $prefix = strtolower(env('UUID_PREFIX', 'salt')).'_';
        }

        return uniqid($prefix);
    }
}