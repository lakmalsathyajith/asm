<?php

namespace App\Processors\Rms;


use App\Traits\DateTrait;
use Illuminate\Support\Arr;

class PostBookingApiRequestProcessor extends AbstractAPiRequestProcessor
{

    protected $rootNode = 'RMSBookingRQ';
    protected $httpMethod = 'POST';

    function __construct()
    {
        parent::__construct();
    }

    public function getFormattedCustomFields()
    {
        $customFields = $this->customFields;
        $occupants = isset($customFields['occupants']) ? $customFields['occupants'] : [];
        $mainOccupant = Arr::first($occupants, function ($value, $key) {
            return isset($value['is_primary']) && $value['is_primary'];
        });
        return [
            'Test' => null,
            'ForceBooking' => null,
            'PencilBooking' => null,
            'PencilBookingExpiryDate' => DateTrait::formatDate($customFields['check_out'], 'Y-m-d\TH:i:s'),
            'Bookings' => [
                'Booking' => [
                    'BookingPrice' => [
                        'Price' => isset($customFields['rent']) ? $customFields['rent'] : 0,
                        // 'CurrencyId' => 5,
                        //                        'Discount Id="4"' => 10.00,
                        //                        'DiscountSecond Id="5"' => 9.00,
                        //                        'Deposit' => 37.50,
                    ],
                    'BookingItem' => [
                        'Agency' => false,
                        'RoomTypeId' => isset($customFields['apartment']) && isset($customFields['apartment']['rms_apartment_id'])
                            ? $customFields['apartment']['rms_apartment_id'] : 0,
                        'AreaId' => isset($customFields['apartment']) && isset($customFields['apartment']['rms_key'])
                            ? $customFields['apartment']['rms_key'] : 0,
                        'ArrivalDate' => isset($customFields['check_in']) ?
                            DateTrait::formatDate($customFields['check_in'], 'Y-m-d\TH:i:s') : null,
                        'DepartureDate' => isset($customFields['check_out']) ?
                            DateTrait::formatDate($customFields['check_out'], 'Y-m-d\TH:i:s') : null,
                        'Adults' => isset($customFields['adults']) ? $customFields['adults'] : 0,
                        'Children' => isset($customFields['children']) ? $customFields['children'] : 0,
                        'ChargeTypeId' => 2,
                        //                        'BookingSourceId' => 3,
                        'Infants' => 0,
                        //                        'Additionals1' => 0,
                        //                        'Additionals2' => 0,
                        //                        'Additionals3' => 0,
                        //                        'Additionals4' => 0,
                        //                        'Additionals5' => 0,
                        //                        'ETA' => "14:01",
                    ],
                    'Remarks' => [
                        'Remark' => !isset($customFields['agent']) || $customFields['agent']=='0' || $customFields['agent']==0?'Added by Guest User':'Added by Agent: '.$customFields['agent']['name'].' ['.$customFields['agent']['code'].']'
                    ]
                ]
            ], 
            'ContactDetail' => [
                //                        'CCConsent' => 0,
                'FirstName' => isset($mainOccupant['first_name'])
                    ? $mainOccupant['first_name'] : null,
                'LastName' => isset($mainOccupant['last_name'])
                    ? $mainOccupant['last_name'] : null,
                'Mobile' => isset($mainOccupant['contacts']) && isset($mainOccupant['contacts']['mobile_phone'])
                    ? $mainOccupant['contacts']['mobile_phone'] : null,
                'Phone' => isset($mainOccupant['contacts']) && isset($mainOccupant['contacts']['land_phone'])
                    ? $mainOccupant['contacts']['land_phone'] : null,
                'EmailAddress' => isset($mainOccupant['contacts']) && isset($mainOccupant['contacts']['email'])
                    ? $mainOccupant['contacts']['email'] : null,
                //    'RVLengthId' => 1,
                //                        'RVTypeId' => 2,
                //                        'RVSlideId' => 0,
                //                        'PhoneAH' => '0386987545',
                'AddressDetail' => [
                    'Address' => isset($mainOccupant['contacts']) && isset($mainOccupant['contacts']['address'])
                        ? $mainOccupant['contacts']['address'] : null,
                    //                            'City' => 'Keilor Park',
                    //                            'Subregion' => 'VIC',
                    //                            'PostCode' => 3029,
                    //                            'Country' => 'Australia',
                    //                            'CountryISO' => null,
                ]
            ]
        ];
    }
}
