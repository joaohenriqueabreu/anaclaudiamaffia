<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

# Include the Autoloader (see "Libraries" for install instructions)
//require '../vendor/autoload.php';
use Mailgun\Mailgun;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller
{
//    public function send(EmailRequest $request)
    public function send(Request $request)
    {
        # Using Mailgun API
        # Instantiate the client.
        $mgClient = new Mailgun(env('MAILGUN_SECRET'));
        $domain = env('MAILGUN_DOMAIN');

        // Constroi a mnesagem do email
        $conteudo = 'Nome: ' . $request->name . ', telefone: ' . $request->phone .
            ', email: ' . $request->email . ' mensagem: ' . $request->conteudo;

        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from' => env('MAILGUN_FROM'),
            'to' => env('MAILGUN_TO'),
            'subject' => 'Novo email recebido do site! Assunto: [' . $request->subject . ']',
            'text' => $conteudo
        ));
        return response()->json(['message' => 'Request completed']);
//        return redirect()->route('landing.home', ['message'=>'Item deleted successfully.']);
//        return true;
    }
}
