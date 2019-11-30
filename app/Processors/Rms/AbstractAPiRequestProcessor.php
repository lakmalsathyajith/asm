<?php

namespace App\Processors\Rms;


use App\Contracts\Rms\AbstractInterface;
use App\Traits\XmlTrait;
use Illuminate\Support\Facades\Config;

class AbstractAPiRequestProcessor implements AbstractInterface
{
    use XmlTrait;

    protected $auth;
    protected $baseUrl;
    protected $headers;
    protected $httpMethod;
    protected $postFields;
    protected $autoGeneratedPostFields;
    protected $rootNode;
    protected $defaultConfigs;

    function __construct()
    {
        $this->defaultConfigs = Config::get('rms');
        $this->refreshOptions();
    }

//    abstract function processRequest(Request $request);

    public function refreshOptions()
    {
        $this->setAuthParams();
        $this->setBaseUrl();
        $this->setHeaders();
        $this->setMethod();
        $this->autoGenerateFields();
        try {
            // $this->setPostFields($this->autoGeneratedPostFields);
            $this->setPostFields($this->postFields);
        } catch (\Exception $e) {
        }
    }

    public function setAuthParams($userName = null, $password = null)
    {
        $auth = $this->defaultConfigs['auth'];

        if (!isset($userName)) {
            $userName = $auth['userName'];
        }

        if (!isset($password)) {
            $password = $auth['password'];
        }

        $this->auth = $userName . ':' . $password;
    }

    public function setBaseUrl($url = null)
    {
        if (!isset($url)) {
            $url = $this->defaultConfigs['namespace'];
        }
        $this->baseUrl = $url;
    }

    public function setHeaders(array $headers = [])
    {
        $allHeaders = $this->defaultConfigs['defaultHeaders'];
        if (isset($headers) && count($headers) > 0) {
            $allHeaders = array_merge($allHeaders, $headers);
        }
        $this->headers = $allHeaders;
    }

    public function setMethod($method = null)
    {
        if (!isset($method)) {
            $method = $this->defaultConfigs['defaultMethod'];
        }
        $this->httpMethod = $method;
    }

    public function autoGenerateFields()
    {
        $request = request();
        $fields = $request->get('postFields');
        $postFields = [];
        if ($fields) {
            foreach ($fields as $field => $value) {
                $postFields[ucfirst($field)] = $value;
            }
        }
        $this->autoGeneratedPostFields = $postFields ? $postFields : [];
    }

    // override this function to add custom fields in to the request
    public function defineCustomFields($customFields = [])
    {
        return $customFields;
    }

    public function setPostFields(array $postFields = [])
    {
        $fields = $this->defaultConfigs['defaultPostFields'];
        if (isset($postFields) && count($postFields) > 0) {
            $fields = array_merge($fields, $postFields);
        }

        $customPostFields = $this->defineCustomFields();
        if (isset($customPostFields) && count($customPostFields) > 0) {
            $fields = array_merge($fields, $customPostFields);
        }

        if (!$this->rootNode) {
            $message = 'The property "rootNode" should be declared in all classes that extends'
                . AbstractAPiRequestProcessor::class;
            throw new \Exception($message);
        }

        $config = [
            'returnType' => 'string',
        ];
        $this->postFields = $this->arrayToXml($this->rootNode, $fields, $config);

        //dd($this->postFields);
    }

    public function getOptions()
    {
        return [
            // common options for all calls
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

            // configurable options
            CURLOPT_CUSTOMREQUEST => $this->httpMethod,
            CURLOPT_URL => $this->baseUrl,
            CURLOPT_POSTFIELDS => $this->postFields,
            CURLOPT_HTTPHEADER => $this->headers,
            CURLOPT_USERPWD => $this->auth
        ];
    }
}