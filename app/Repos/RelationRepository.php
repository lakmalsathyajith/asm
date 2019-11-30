<?php

namespace App\Repos;
use App\Contracts\RepoInterfaces\RelationInterface;
use App\Entities\Booking;
use App\Entities\Relation;

class RelationRepository extends AbstractRepository implements RelationInterface
{
    public function __construct(
        Relation $model
    )
    {
        parent::__construct($model);
    }
}