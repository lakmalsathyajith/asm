<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\BlogInterface;
use App\Entities\Blog;

class BlogRepository extends AbstractRepository implements BlogInterface
{
    public function __construct(
        Blog $model
    )
    {
        parent::__construct($model);
    }
}