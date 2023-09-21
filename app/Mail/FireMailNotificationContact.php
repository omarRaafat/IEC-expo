<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FireMailNotificationContact extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = "no-reply@umbrella.sa";
        $name = 'Business Umbrella no-reply';
        $subject = 'NEW CONTACT FROM IEC  !';
        return $this->view('_partials._contact')
            ->from($address, $name)
            ->subject($subject)
          ;
    }
}
