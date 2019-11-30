<?php

namespace App\Processors\Rms;


class GetPropertyDetailsApiRequestProcessor extends AbstractAPiRequestProcessor
{

    protected $rootNode = 'RMSPropertyRQ';

    function __construct()
    {
        parent::__construct();
    }
}