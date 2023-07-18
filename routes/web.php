<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/email'); // Redireciona a raiz para a rota '/email'
});

Route::get('/email', function(){
    return view('email'); // Retorna a view 'email', responsável por exibir o formulário de e-mail
});

Route::post('/enviar', [MailController::class, 'sendEmail']);
// Define uma rota do tipo POST para a URL '/enviar'. Quando o formulário é enviado, chama o método 'sendEmail' do controlador MailController.
