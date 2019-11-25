<?php

namespace App\Processors\Rms;


class GetRoomTypeApiRequestProcessor extends AbstractAPiRequestProcessor
{

    protected $rootNode = 'RMSRoomTypeRQ';



    function __construct()
    {
        parent::__construct();
    }
}