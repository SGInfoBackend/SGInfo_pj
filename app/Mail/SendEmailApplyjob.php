<?php

namespace App\Mail;

use App\Models\ApplyJob;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class SendEmailApplyjob extends Mailable
{
    use Queueable, SerializesModels;

    public $apply_job;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ApplyJob $apply_job)
    {
        //
        $this->apply_job = $apply_job;
        // dd($this->apply_job);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("tintwai@gmail.com")->to($this->apply_job->Gmail, 'Hello World')
            ->view('emails.posts.send-mail')->with([
                'job' => $this->apply_job
            ]);
    }
}
