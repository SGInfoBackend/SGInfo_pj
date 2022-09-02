<?php

namespace App\Http\Livewire;

use App\Mail\SendEmailApplyjob;
use App\Models\ApplyJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;
use Livewire\Component;

class ApplyJobComponent extends Component
{
    use WithFileUploads;
    // Applying Job
    public $job_title;
    public $name;
    public $email;
    public $phone;
    public $cvfile;

    public function mount($Job_title)
    {
        $this->job_title = $Job_title;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'job_title' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'cvfile' => 'required',
        ]);
    }

    public function storeApplyJob()
    {
        $this->validate([
            'job_title' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'cvfile' => 'required',
        ]);


        $applyjobs = new ApplyJob();
        $applyjobs->USER_ID = Auth::user()->id; // fetch user id from users table

        $applyjobs->USER_name = $this->name;
        $applyjobs->phone = $this->phone;
        $applyjobs->Gmail = $this->email;
        $applyjobs->CV_File = $this->cvfile->store('files', 'public');
        $applyjobs->save();

        Mail::to($applyjobs->user)->queue(
            new SendEmailApplyjob($applyjobs)
        );
        // Mail::to($applyjobs->user)->send(
        //     new SendEmailApplyjob($applyjobs)
        // );
        session()->flash('success_message', 'You applied this job successfully!');
    }

    public function render()
    {
        return view('livewire.apply-job-component')->layout('layouts.base');
    }
}
