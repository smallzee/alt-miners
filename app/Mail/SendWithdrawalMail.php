<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendWithdrawalMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reference,$email_address,$amount,$wallet_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reference,$email_address,$amount,$wallet_address)
    {
        //
        $this->reference = $reference;
        $this->email_address = $email_address;
        $this->amount = $amount;
        $this->wallet_address = $wallet_address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendwithdrawalmail')->subject("Withdrawal Notification");
    }
}
