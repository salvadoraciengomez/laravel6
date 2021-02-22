<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
//php artisan make:mail ClassName
{
    use Queueable, SerializesModels;

    //Las propiedades public van hacia la plantilla blade
    public $topic;


    /**
     * Create a new message instance.
     *
     * @return void
     */


     //Se inserta la propiedad topic en el constructor y se inicializa 
     //habría que pasarla en los argumentos del constructor en el ContactController
    public function __construct($topic)
    {
        $this->topic=$topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-me');
    }
}
