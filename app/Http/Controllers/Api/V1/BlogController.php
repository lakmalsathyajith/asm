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

    /**
     * Return a listing
     *
     * @return string
     */
    function index()
    {
        $query = $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('metas');

        $query = $query->orderBy('date', 'desc');

        $data = $this->getPaginated($query);

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'records fetched successfully',
            $data
        );
    }


    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return string
     * @internal param $id
     */
    public function show($slug)
    {
        $data = $this->activeRepo
            ->with('contents')
            ->with('files')
            ->with('metas')
            ->where('slug', $slug)
            ->get();

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'records fetched successfully',
            $data
        );
    }
}
