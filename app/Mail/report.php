<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class report extends Mailable
{
    use Queueable, SerializesModels;

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
        return $this->from('info@astrolifeguide.com')->subject('Your Report From  Astrolifeguide')->view('emails.sendreport')->with('data', $this->data)
            ->attach(public_path('/uploads/reports/'.$this->data['image']), [
                'as' => 'Report.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
