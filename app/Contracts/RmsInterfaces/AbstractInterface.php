<?php

namespace App\Contracts\Rms;


interface AbstractInterface
{
    public function setAuthParams($userName, $password);

    public function setBaseUrl($url);

    public function setHeaders(array $headers);

    public function setMethod($method);

    public function setPostFields(array $postFields);

    public function getOptions();
}