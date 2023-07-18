<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Services\EmailService;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    protected $emailService; // Propriedade para armazenar uma instância de EmailService

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService; // Injeta uma instância de EmailService na propriedade $emailService
    }

    public function sendEmail(Request $request)
    {
        $request = $request->validate([
            'email' => 'required',
            'text' => 'required'
        ]); // Valida os campos 'email' e 'text' recebidos na requisição

        $recipient = $request['email']; // Obtém o destinatário do e-mail a partir da requisição
        $data = ['message' => $request['text']]; // Define os dados do e-mail a partir do campo 'text' da requisição

        $this->emailService->sendEmail($recipient, $data); // Chama o método sendEmail do serviço de e-mail para enviar o e-mail

        return redirect('/email'); // Redireciona de volta para a página de e-mail
    }
}
