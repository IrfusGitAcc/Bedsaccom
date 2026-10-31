<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data; // Holds the enquiry data
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;

    }

    /**
     * Build the message.
     */
    public function build(){

        return $this->subject('New Enquiry Received')
                    ->view('emails.contact-mail')
                    ->with('data', $this->data);
    }

}
