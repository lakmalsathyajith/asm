<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Entities\Apartment;

class ApartmentRepository extends AbstractRepository implements ApartmentInterface
{
    public function __construct(
        Apartment $model
    )
    {
        parent::__construct($model);
    }
}