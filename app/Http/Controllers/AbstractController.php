<?php

namespace App\Http\Controllers;


use App\Traits\ResponseTrait;
use App\Traits\XmlTrait;
use Illuminate\Http\Request;

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

    /**
     * Display the specified resource.
     *
     * @param array $where
     * @return string
     */
    function filter($where = [])
    {
        $model = $this->activeRepo->getModel();
        if (is_array($where) && count($where) > 0) {



            foreach ($where as $key => $value) {


                $model->where($value['key'], $value['op'], $value['val']);
                dd($value);

            }
        }
        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return string
     */
    function destroy($id)
    {
        try {
            $data = $this->activeRepo->delete($id);
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'record deleted successfully',
                $data);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return string
     */
    function showMany(Request $request)
    {
        /*try {
            $data = $this->activeRepo->getMany($ids);
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $data);
        } catch (\Exception $e) {
            return $this->returnResponse();
        }*/
    }
}