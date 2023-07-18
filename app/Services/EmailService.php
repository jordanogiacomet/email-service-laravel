<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail; // Importa a classe Mail do Laravel
use App\Mail\TestEmail; // Importa a classe TestEmail definida no arquivo App\Mail\TestEmail.php

class EmailService {
    public function sendEmail($recipient, $data) {
        try{
            Mail::to($recipient)->send(new TestEmail($data)); // Envia um e-mail para o destinatário usando a classe TestEmail e os dados fornecidos
        } catch (Exception $e){
            $this->sendEmailBackup($recipient, $data); // Em caso de exceção, chama o método sendEmailBackup para enviar o e-mail de backup
        }
    }

    private function sendEmailBackup($recipient, $data){
        Mail::mailer('postmark')->to($recipient)->send(new TestEmail($data)); // Envia um e-mail de backup para o destinatário usando o provedor de e-mail "postmark" e a classe TestEmail com os dados fornecidos
    }
}