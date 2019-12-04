<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\Contact\ContactApiRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends AbstractApiController
{
    

    function __construct()
    {
      
    }

    public function store(ContactApiRequest $request)
    {
       
        try {
         $data = $request->all();
         Mail::to(env('CONTACT_EMAIL', 'mailtestlistudios@gamil.com'))->bcc('wasana.wickramasinghe@gmail.com','Wasana Wickramasinghe')->send(new \App\Mail\ContactMail($data));
        } catch (\Exception $e) {
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Error Occurred while creating the booking',
                $data,
                [$e->getMessage()]
                ,200
            );
        }
    }
}