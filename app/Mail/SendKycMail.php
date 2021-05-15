<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendKycMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_address;
    public $full_name;
    public $kyc_type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name,$email_address,$kyc_type)
    {
        //
        $this->full_name = $full_name;
        $this->email_address = $email_address;
        $this->kyc_type = $kyc_type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendkycmail')->subject("KYC Notification");
    }
}
