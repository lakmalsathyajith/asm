<?php

namespace App\Http\Controllers;


use App\Traits\ResponseTrait;
use App\Traits\XmlTrait;

class AbstractController extends Controller
{
    use ResponseTrait;
    use XmlTrait;

    protected $activeRepo = null;

    function __construct()
    {

    }


    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    function index()
    {
        try {
            $data = $this->activeRepo->all();
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $data);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param $id
     * @return string
     */
    function show($id)
    {
        try {
            $data = $this->activeRepo->get($id);
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'record fetched successfully',
                $data);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }
}