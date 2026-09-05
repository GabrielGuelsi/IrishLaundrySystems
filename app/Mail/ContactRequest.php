<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    public array $photos;

    public function __construct(array $data, array $photos = [])
    {
        $this->data = $data;
        $this->photos = $photos;
    }

    public function envelope(): Envelope
    {
        $requestType = ucfirst(str_replace('_', ' ', $this->data['request_type'] ?? 'General'));
        $urgency     = $this->data['urgency'] ?? '';
        $prefix      = ($urgency === 'today') ? '[URGENT] ' : '';

        return new Envelope(
            subject: $prefix . 'New ILS Enquiry — ' . $requestType . ' from ' . ($this->data['company'] ?? 'Unknown'),
            replyTo: [new Address($this->data['email'], $this->data['name'])],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-request',
            with: ['data' => $this->data],
        );
    }

    public function attachments(): array
    {
        return collect($this->photos)
            ->map(fn ($file) => Attachment::fromPath($file->getRealPath())
                ->as($file->getClientOriginalName())
                ->withMime($file->getClientMimeType()))
            ->all();
    }
}
