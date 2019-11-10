<?php

namespace App\Libraries;


class Curl
{
    private $curlOptions = [];

    public function __construct()
    {
        $this->setDefaultOptions();
    }

    public function request()
    {
        $curl = curl_init();
        curl_setopt_array($curl, $this->getOptions());
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        // todo: throw focused error
        if ($err) {
            throw new \Exception($err);
        }
        return $response;
    }

    private function setDefaultOptions()
    {
        $curlOptions = [];
        $this->curlOptions = $curlOptions;
    }

    public function setOption($key, $value)
    {
        $this->curlOptions[$key] = $value;
    }

    public function setOptions(array $options)
    {
        $this->curlOptions = $options;
    }

    public function getOption($key)
    {
        return $this->curlOptions[$key]
            ? $this->curlOptions[$key]
            : null;
    }

    public function getOptions()
    {
        return $this->curlOptions;
    }

}
