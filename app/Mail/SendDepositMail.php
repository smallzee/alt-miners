<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDepositMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_address,$payment_method,$reference,$amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_address,$payment_method,$reference,$amount)
    {
        //

        $this->email_address = $email_address;
        $this->payment_method = $payment_method;
        $this->reference = $reference;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendepositmail')->subject("Deposit Notification");
    }
}
