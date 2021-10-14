<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservationEmail extends Mailable
{
    use Queueable, SerializesModels;
/**
 * @var
 */
public $user, $local,$amount_person;
/**
 * @var
 */
// public $local;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $local, $amount_person)
    {
        $this->user = $user;
        $this->local = $local;
        $this->amount_person = $amount_person;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reservation')
        ->with('LikeIUApp', 'ControlaTuEquipo')
        ->from('noreplymimirwell@gmail.com', 'ControlaTuEquipo App')
        ->subject('Codigo de Activación');
    }
}
