<?php

namespace App\Repo;


use App\Contracts\RepoInterfaces\UserInterface;
use App\Entities\User;

class UserRepository extends AbstractRepository implements UserInterface
{
    public function __construct(
        User $model
    )
    {
        parent::__construct($model);
    }
}