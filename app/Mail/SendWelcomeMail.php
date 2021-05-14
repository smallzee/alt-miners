<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name,$password,$email_address,$country;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name,$password,$email_address,$country)
    {
        //
        $this->full_name = $full_name;
        $this->password = $password;
        $this->email_address = $email_address;
        $this->country = $country;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendwelcomemail')->subject("Account Details");
    }
}
