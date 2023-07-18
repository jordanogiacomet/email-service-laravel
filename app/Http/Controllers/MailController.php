<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Services\EmailService;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }


    public function sendEmail(Request $request) {

        $request = $request->validate([
            'email' => 'required',
            'text' => 'required'
        ]);


        $recipient = $request['email'];
        $data = ['message' => $request['text']];
        
        
        $this->emailService->sendEmail($recipient, $data);
    
    
        return redirect('/email');
    }

}
