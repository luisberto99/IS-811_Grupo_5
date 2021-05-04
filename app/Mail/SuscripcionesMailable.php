<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuscripcionesMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Actualizacion de anuncios";
    public $fecha, $titulo, $descripcion, $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fecha, $titulo, $descripcion, $id)
    {
        $this->fecha = $fecha;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.suscripciones');
    }
}
