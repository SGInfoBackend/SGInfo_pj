<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookRoomComfirmed extends Mailable
{
    use Queueable, SerializesModels;
    public $book_info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($book_info)
    {
        $this->book_info = $book_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Book Room has been successfully!";
        return $this->subject($subject)
        ->view('mail.book_confirmed');
    }
}
