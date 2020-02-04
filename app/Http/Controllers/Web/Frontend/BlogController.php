<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Contracts\RepoInterfaces\BlogInterface;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends AbstractController
{

    protected $request;

    function __construct(BlogInterface $blogRepoInstance, Request $request)
    {
        $this->request = $request;
        $this->activeRepo = $blogRepoInstance;
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
        $meta['title'] = app()->getLocale() == 'en'? $data['name']: $data['name_zh'];
        if(isset($data['files']) && isset($data['files'][0])){
            $meta['image'] = $data['files'][0]['url'];
        }
        if(count($data->metas)>0){
            $metaObj = $data->metas[0];
            $meta['keywords'] = $metaObj->name;
            $meta['description'] = $metaObj->description;
        }

        return view('pages.blogDetail', ['params' => $params, 'menu' => 'blog', 'meta' => $meta]);
    }
}
