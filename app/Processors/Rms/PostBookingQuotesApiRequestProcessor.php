<?php

namespace App\Processors\Rms;


class PostBookingQuotesApiRequestProcessor extends AbstractAPiRequestProcessor
{

    protected $rootNode = 'RMSQuoteRQ';

    protected $httpMethod = "POST";

    protected $postFields = array(
        'Quotes' => array(
            'Quote' => array(
                'QuoteItem' => array(
                    'RoomTypeId' => 16,
                    'NoOfRooms' => 1,
                    'ChargeTypeId' => 1,
                    'BookingSourceId' => 1,
                    'ArrivalDate' => '2019-11-25T00:00:00',
                    'DepartureDate' => '2019-11-28T00:00:00',
                    'Adults' => 2,
                    'Children' => 0,
                    'Infants' => 0,
                ),
            ),
        ),
    );

    function __construct()
    {
        parent::__construct();

    }
}