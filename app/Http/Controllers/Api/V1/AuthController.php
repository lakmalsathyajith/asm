<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\AbstractApiController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends AbstractApiController
{

    public function __construct()
    {

    }

    public function login()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'user login successfully',
                $success,
                [],
                200
            );
        }
        else{
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'user added successfully',
                null,
                ['Unauthorised'],
                401
            );
        }
    }

    public function authUser()
    {
        $user = Auth::user();
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'user login successfully',
            $user,
            [],
            200
        );
    }
}
