<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDepositTransaction extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name,$reference,$status,$total_deposit,$amount,$type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name,$reference,$status,$total_deposit,$amount,$type)
    {
        //
        $this->full_name = $full_name;
        $this->reference = $reference;
        $this->status = $status;
        $this->total_deposit = $total_deposit;
        $this->amount = $amount;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendepositransaction')->subject('Transaction Notification');
    }
}
