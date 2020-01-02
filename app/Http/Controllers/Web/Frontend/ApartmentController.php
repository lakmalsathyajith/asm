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

        $data = $this->activeRepo->with(['metas' => function($query) {
            $locale = app()->getLocale();
            $query->where('locale', $locale);
        }])->where('slug', $id)->first();
        
        $params = [];
        $params['id'] = $data['id'];
        $params['slug'] = $data['slug'];
        
        $meta = [];
        $meta['keywords'] = "";
        $meta['description'] = "";
        if(count($data->metas)>0){
            $metaObj = $data->metas[0];
            $meta['keywords'] = $metaObj->name;
            $meta['description'] = $metaObj->description;
        }

        return view('pages.apartments.detail', ['params' => $params, ['menu' => 'rates'], 'meta' => $meta]);
    }
}