<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$email_address,$subject,$message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email_address,$message,$subject)
    {
        //
        $this->name = $name;
        $this->email_address = $email_address;
        $this->message = $message;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendsupportmail')->subject($this->subject);
    }
}
