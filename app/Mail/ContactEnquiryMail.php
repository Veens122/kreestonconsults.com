<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $contact
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Website Enquiry - Kreeston Consulting Services',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-enquiry',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
