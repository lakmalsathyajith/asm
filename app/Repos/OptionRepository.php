<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\OptionInterface;
use App\Entities\Option;

class OptionRepository extends AbstractRepository implements OptionInterface
{
    public function __construct(
        Option $model
    )
    {
        parent::__construct($model);
    }
}