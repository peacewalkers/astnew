<?php

namespace App\Mail;

use App\Models\Horoscope;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    protected $requestReceived;

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
        return $this->from('info@astrolifeguide.com')->subject('New Customer Equiry')->view('emails.thankyou')->with('data', $this->data);
    }
}
