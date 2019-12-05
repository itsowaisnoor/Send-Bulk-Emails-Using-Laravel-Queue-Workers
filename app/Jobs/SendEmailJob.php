<?php

namespace App\Jobs;

use App\Mail\OrderMail;
use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $contact;
    public $emails;
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
        $this->emails = explode(', ',$this->contact->emails);

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to("itsowaisnoor@gmail.com")
            ->bcc($this->emails)
            ->send(new OrderMail($this->contact));
        
    }
}
