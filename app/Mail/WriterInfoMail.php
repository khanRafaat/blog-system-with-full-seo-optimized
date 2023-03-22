<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WriterInfoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $writerName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($writerName)
    {
        $this->writerName = $writerName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('WikiLeanrs Be a Writer')->view('emails.writerinfostore');
    }
}
