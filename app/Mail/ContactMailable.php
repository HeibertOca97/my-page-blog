<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject; 
    public $subjectclient, $name, $email, $messageclient;
    
    public function __construct($request)
    {
        $this->subject = config('app.name','')." | Informacion de contacto";
        $this->subjectclient = $request->business;
        $this->name = $request->name;
        $this->email = $request->email;
        $this->messageclient = $request->message;
    }

    public function build()
    {
        return $this->view('email.contactar');
    }
}
