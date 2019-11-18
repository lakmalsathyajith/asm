<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\UserInterface;
use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\User\StoreUserRequest;
use App\Processors\Rms\GetAvailabilityRatesApiRequestProcessor;
use App\Processors\Rms\GetRoomTypeApiRequestProcessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends AbstractApiController
{

    function __construct(
        UserInterface $userRepoInstance
    )
    {
        $this->activeRepo = $userRepoInstance;
    }


    /**
     * @param StoreUserRequest $request
     * @return string
     */
    public function store(StoreUserRequest $request)
    {
        $requestData = $request->all();

        $data = [
            'name' => $requestData['name'],
            'email' => $requestData['email'],
            'password'=> Hash::make($requestData['password'])
        ];

        $data =  $this->activeRepo->create($data);

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'user added successfully',
            $data,
            200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * This is a test function to demo rms api request
     * remove this after the implementation
     */
    public function test(){
        $response1 = $this->makeRmsRequest(new GetRoomTypeApiRequestProcessor());
        //$response2 = $this->makeRmsRequest(new GetAvailabilityRatesApiRequestProcessor());

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'user added successfully',
            $response1,
            200
        );
       // \Log::debug($response1);
       // \Log::debug($response2);
    }
}
