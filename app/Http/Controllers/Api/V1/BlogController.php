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
        // dummy data set
        $data = [
            'pagination' => [
                'totalRecords' => 20,
                'perPage'  => 2,
                'page' => 1
            ],
            'records' => [
                [
                    'title' => 'title 1',
                    'slug'  => 'slug_1',
                    'description' => 'This is the short description 1',
                    'content' => '<p>This is the html content 1</p>>',
                    'date' => '2010-12-15',
                    'images' => [

                    ],
                    'meta' => [

                    ]
                ], [
                    'title' => 'title 2',
                    'slug'  => 'slug_2',
                    'description' => 'This is the short description 2',
                    'content' => '<p>This is the html content 2</p>>',
                    'date' => '2010-12-16',
                    'images' => [

                    ],
                    'meta' => [

                    ]
                ]
            ]
        ];
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'records fetched successfully',
            $data
        );
    }
}
