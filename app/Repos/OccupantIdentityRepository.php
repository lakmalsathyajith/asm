<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\OccupantIdentityInterface;
use App\Entities\OccupantIdentity;

class OccupantIdentityRepository extends AbstractRepository implements OccupantIdentityInterface
{
    public function __construct(
        OccupantIdentity $model
    )
    {
        parent::__construct($model);
    }
}