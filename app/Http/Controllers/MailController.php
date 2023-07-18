<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class MailController extends Controller
{
    public function sendEmail() {

        $data = ['message' => 'This is a test!'];

        Mail::to('jgtomazoni@ucs.br')->send(new TestEmail($data));
    }
}
