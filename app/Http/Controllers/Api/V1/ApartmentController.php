<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;

class ApartmentController extends AbstractController
{
    function __construct(
        ApartmentInterface $apartmentRepoInstance
    )
    {
        $this->activeRepo = $apartmentRepoInstance;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->activeRepo
            ->with('contents')
            ->with('files')
            ->findOrFail($id);
    }


}
