<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    protected Product $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), 'Notification')
            ->view('mail.sendNotification', ['product' => $this->product]);
    }
}
