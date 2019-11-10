<?php

namespace App\Traits;



Trait ResponseTrait
{
    Private $responseStatus = [
        'SUCCESS' => 'Success',
        'ERROR' => 'Error',
        'WARNING' => 'Warning',
        'INFO' => 'Info'
    ];

    /**
     * @param null $status
     * @param int $statusCode
     * @param null $message
     * @param array $data
     * @param array $errors
     * @return string
     */
    public function returnResponse($status = null, $message = null, $data = [], $errors = [], $statusCode = 200)
    {
        if($status === null) {
            $status = $this->getResponseStatus('SUCCESS');
        }

        return (
            response()->json([
                'statusCode' => $statusCode,
                'data'   => $data,
                'status'  => $status,
                'message' => $message,
                'errors' => $errors,
            ], $statusCode)->content()
        );
    }


    /**
     * @param $statusName
     * @return mixed
     * @throws \Exception
     */
    public function getResponseStatus($statusName)
    {
        if(!isset($this->responseStatus[$statusName])) {
            throw new \Exception('Response Status not set');
        }
        return $this->responseStatus[$statusName];
    }


    /**
     * @param $string
     * @return \Illuminate\Http\JsonResponse
     */
    public function decodeResponse($string)
    {
        return response()->json(json_decode($string));
    }
}