<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Cart;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $cart;
    public $nom;
    public $prenom;
    public $tel;
    public $total;

    public function __construct($nom,$prenom,$tel,$cart,$total)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->tel=$tel;
        $this->cart=$cart;
        $this->total=$total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Vous avez une nouvelle commande')->view('mails.ordermail');
    }
}
