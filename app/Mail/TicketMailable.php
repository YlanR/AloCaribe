<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $tickets;
    public $competidores;

    /**
     * Create a new message instance.
     *
     * @param  array  $mailData
     * @return void
     */
    public function __construct($tickets, $competidores)
    {
        $this->tickets = $tickets;
        $this->competidores = $competidores;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Informacion de contacto')
                    ->view('pdf.pdfTicket')
                    ->with($this->tickets);
    }
}
