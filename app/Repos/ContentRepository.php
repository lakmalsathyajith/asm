<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\ContentInterface;
use App\Entities\Content;

class ContentRepository extends AbstractRepository implements ContentInterface
{
    public function __construct(
        Content $model
    )
    {
        parent::__construct($model);
    }
}