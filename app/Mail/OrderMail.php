<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Contact;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;
    public function __construct(Contact $contact)
    {
       $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.index')
            ->with([
                'contact'=> $this->contact,
            ]);
    }
}
