<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\TypeInterface;
use App\Entities\Type;

class TypeRepository extends AbstractRepository implements TypeInterface
{
    public function __construct(
        Type $model
    )
    {
        parent::__construct($model);
    }
}