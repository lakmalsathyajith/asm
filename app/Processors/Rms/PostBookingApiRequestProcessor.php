<?php

namespace App\Processors\Rms;


class PostBookingApiRequestProcessor extends AbstractAPiRequestProcessor
{

    protected $rootNode = 'RMSBookingRQ';

    protected $postFields = array(
        'Test' => 'Test',
        'Quotes' => array(
            'Quote' => array(
                'QuoteItem' => array(
                    'RoomTypeId' => 16,
                    'NoOfRooms' => 1,
                    'ChargeTypeId' => 1,
                    'BookingSourceId' => '',
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