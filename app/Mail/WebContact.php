<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebContact extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $details;

    
    public function __construct($details)
    {
        $this->details = $details;
    }

    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Consulta desde la web CEC',
        );
    }

    
    public function content(): Content
    {
        return new Content(
            view: 'mails.webForm',
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
