<?php

namespace App\Mail;

use App\Models\ContactRequest;
use App\Models\SiteSetting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public ContactRequest $contactRequest,
        public ?SiteSetting $siteSetting = null,
    ) {
    }

    public function build(): self
    {
        return $this->subject('New contact request from ' . $this->contactRequest->name)
            ->view('emails.contact.admin');
    }
}
