<?php

// contains all rms api related configs

return [
    'namespace' => 'https://api2.rms.com.au/rmsxml/rms_api.aspx',
    'defaultMethod' => 'GET',
    'auth' => [
        'userName' => env('RMS_USERNAME'),
        'password' => env('RMS_PASSWORD')
    ],
    'defaultPostFields' => [
        'AgentId' => env('RMS_AGENT_ID'),
        'RMSClientId' => env('RMS_CLIENT_ID')
    ],
    'defaultHeaders' => [
        "cache-control: no-cache",
        "content-type: application/xml"
    ]
];
