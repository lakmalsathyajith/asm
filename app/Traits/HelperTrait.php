<?php

namespace App\Traits;


Trait HelperTrait
{
    public function generateValidationResponse($request, $exception){
        return response()->json(json_decode($exception->getMessage()),422);
    }


}