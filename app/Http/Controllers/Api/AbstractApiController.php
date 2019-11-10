<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\AbstractController;
use App\Libraries\Curl;
use App\Processors\Rms\AbstractAPiRequestProcessor;

class AbstractApiController extends AbstractController
{

    public function makeRmsRequest(AbstractAPiRequestProcessor $processor)
    {
        $curl = new Curl();
        $options = $processor->getOptions();
        $curl->setOptions($options);
        $response = $curl->request();
        return $this->xmlToArray($response);
    }
}