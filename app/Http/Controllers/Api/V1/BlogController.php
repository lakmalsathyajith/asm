<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\BlogInterface;
use App\Http\Controllers\Api\AbstractApiController;

class BlogController extends AbstractApiController
{
    function __construct(
        BlogInterface $blogRepoInstance
    ) {
        $this->activeRepo = $blogRepoInstance;
    }

    function index()
    {
        $query = $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('metas');

        $data = $this->getPaginated($query);

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'records fetched successfully',
            $data
        );
    }
}
