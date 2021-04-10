<?php

namespace Dickens\Message\App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $email)
    {
        $this->message = $message;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('dickens::emails.messages.sent')->with([
            'email' => $this->email,
            'message'=>$this->message
        ]);
    }
}
