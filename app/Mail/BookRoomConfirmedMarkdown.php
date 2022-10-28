<?php

namespace App\Mail;

use App\Models\BookRoom;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookRoomConfirmedMarkdown extends Mailable 
{
    use Queueable, SerializesModels;
    public $bookroom;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(BookRoom $bookRoom)
    {
        $this->bookroom = $bookRoom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.book.room.markdown');
    }
}
