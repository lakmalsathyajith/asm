<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\AbstractController;
use App\Contracts\RepoInterfaces\ApartmentInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentController extends AbstractController
{

    protected $request;

    function __construct(ApartmentInterface $apartmentRepoInstance, Request $request)
    {
        $this->request = $request;
        $this->activeRepo = $apartmentRepoInstance;
    }

    public function show($id)
    {
        //$data = $this->activeRepo->get($id);
        $data = $this->activeRepo->getBySlug($id);
        $params = $this->request->route()->parameters;
        $meta = [];
        $meta['keywords'] = $data['meta'];
        $meta['description'] = $data['meta_description'];

        return view('pages.apartments.detail', ['params' => $params['id'], ['menu' => 'rates'], 'meta' => $meta]);
    }
}
