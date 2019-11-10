<?php

namespace App\Processors\Rms;


class GetAvailabilityRatesApiRequestProcessor extends AbstractAPiRequestProcessor
{

    protected $rootNode = 'RMSAvailRateChartRQ';

    function __construct()
    {
        parent::__construct();
    }
}