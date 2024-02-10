<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FireMailNotification extends Mailable
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
        $address = 'no-reply@umbrella.sa';
        $name = 'EXPO no-reply';
        $subject = 'IEC Expo - '.$this->data->name;
        return $this->view('_partials._mail')
            ->from($address, $name)
            ->subject($subject)
          ;
    }
}
