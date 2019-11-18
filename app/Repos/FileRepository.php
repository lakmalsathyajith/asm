<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\FileInterface;
use App\Entities\File;

class FileRepository extends AbstractRepository implements FileInterface
{
    public function __construct(
        File $model
    )
    {
        parent::__construct($model);
    }
}