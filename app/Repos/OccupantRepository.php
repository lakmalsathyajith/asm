<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\OccupantInterface;
use App\Entities\Occupant;

class OccupantRepository extends AbstractRepository implements OccupantInterface
{
    public function __construct(
        Occupant $model
    )
    {
        parent::__construct($model);
    }
}