<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendKycFeedBack extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name,$comment,$subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name,$comment,$subject)
    {
        //
        $this->full_name  = $full_name;
        $this->comment = $comment;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendkycfeedback')->subject($this->subject);
    }
}
