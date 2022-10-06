<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UsersCreated extends Mailable
{
    use Queueable, SerializesModels;



    public function __construct(public string $nomeUsuario, public string $url)
    {
        $this->subject = "Usuário criado com sucesso!";
    }


    public function build()
    {
        return $this->markdown('mail.form-email');
    }
}
