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

        $recipient = $request['email'];
        $data = ['message' => $request['message']];
        
        
        $this->emailService->sendEmail($recipient, $data);
    
    
        return response()->json(['message' => 'Email enviado']);
    }

}
