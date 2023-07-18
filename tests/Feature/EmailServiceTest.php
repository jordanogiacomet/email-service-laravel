<?php

namespace Tests\Unit;

use Mockery;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Services\EmailService;
use App\Mail\TestEmail;

class EmailServiceTest extends TestCase
{
    

    public function testSendEmail()
    {
        // Define o recipient e o data para o teste
        $recipient = 'johndoe@example.com';
        $data = ['message' => 'This is a test!'];

        // Mock do envio de e-mail
        Mail::fake();

        // Cria uma instância do EmailService
        $emailService = new EmailService();

        // Chama o método sendEmail()
        $emailService->sendEmail($recipient, $data);

        // Verifica se o e-mail foi enviado corretamente
        Mail::assertSent(TestEmail::class, function ($mail) use ($recipient) {
            return $mail->hasTo($recipient);
        });
    }
}