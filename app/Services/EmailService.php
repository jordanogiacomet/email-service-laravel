<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class EmailService {
    public function sendEmail($recipient, $data) {
        try{
            Mail::to($recipient)->send(new TestEmail($data));
        } catch (Exception $e){
            $this->sendEmailBackup($recipient, $data);
        }
    }

    private function sendEmailBackup($recipient, $data){
        Mail::mailer('postmark')->to($recipient)->send(new TestEmail($data));
    }
}