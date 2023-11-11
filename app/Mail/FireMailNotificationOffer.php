<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FireMailNotificationOffer extends Mailable
{
    use Queueable, SerializesModels;
    protected $pdf;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf)
    {
        $this->pdf = $pdf;
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'expo@umbrella.sa';
        $name = 'IEC Expo no-reply';
        $subject = 'successfull registration in IEC EXPO ! ';
        return $this->view('_partials._mail_offer')
            ->from($address, $name)
            ->subject($subject)
            // ->attachData($this->pdf->output(), 'EXPO-Quota.pdf');
          ;
    }
}
