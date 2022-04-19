<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre;
    public $correo;
    public $pregunta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$correo,$pregunta)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->pregunta = $pregunta;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 


        return $this->subject('Contacto nuevo')        
        ->markdown('email.ContactUsEmail');

       
    }
}