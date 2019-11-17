<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;

class ApartmentController extends AbstractController
{
    function __construct(
        ApartmentInterface $apartmentRepoInstance
    )
    {
        $this->activeRepo = $apartmentRepoInstance;
    }
}
