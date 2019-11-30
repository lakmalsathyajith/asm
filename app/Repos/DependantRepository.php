<?php

namespace App\Repos;
use App\Contracts\RepoInterfaces\DependantInterface;
use App\Entities\Dependant;

class DependantRepository extends AbstractRepository implements DependantInterface
{
    public function __construct(
        Dependant $model
    )
    {
        parent::__construct($model);
    }
}