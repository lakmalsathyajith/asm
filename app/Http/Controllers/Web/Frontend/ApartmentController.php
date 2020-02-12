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
        }])->where(is_numeric($id)?'id':'slug', $id)->first();
        
        $params = [];
        $params['id'] = $data['id'];
        $params['slug'] = $data['slug'];
        $params['type_id'] = $data['rms_key'];
        $params['area_id'] = $data['rms_apartment_id'];
        
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
