<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\OccupantContactInterface;
use App\Entities\OccupantContact;

class OccupantContactRepository extends AbstractRepository implements OccupantContactInterface
{
    public function __construct(
        OccupantContact $model
    )
    {
        parent::__construct($model);
    }
}