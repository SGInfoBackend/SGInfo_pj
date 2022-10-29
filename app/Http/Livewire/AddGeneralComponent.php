<?php

namespace App\Http\Livewire;

use App\Exceptions\DemoException;
use App\Http\Requests\GeneralAddarticalRequest;
use App\Models\General;
use App\Models\GHeader;
use App\Rules\PropertyName;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddGeneralComponent extends Component
{
    use WithFileUploads;

    // public $user_id;
    public $gname;
    public $gtitle;
    public $gheader_id;
    public $gphotos;
    public $gdescription;

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName, [
            'gname' => 'required|string|min:5',
            'gtitle' => 'required|string',
            'gheader_id' => 'required',
            'gphotos' => 'image|mimes:jpeg,png,jpg|max:1024',
            'gdescription' => 'required',
        ]);
    }

    public function addArtical()
    {
        if (!Auth::check()) {
            $this->dispatchBrowserEvent('show_modal');
        }
        $this->validate([
            'gname' => 'required|string|min:5',
            'gtitle' => 'required',
            'gheader_id' => 'required',
            'gphotos' => 'image|mimes:jpeg,png,jpg|max:1024',
            'gdescription' => 'required',
        ]);
        // // General::create($validatedData);
        // dd('is working');
        $artical = new General();

        $artical->USER_ID  = Auth::user()->id;
        $artical->G_Name = $this->gname;
        // dd($artical->G_Name );
        $artical->G_Title = $this->gtitle;
        $artical->GHeader_ID = $this->gheader_id;

        $imageName = Carbon::now()->timestamp . '.' . $this->gphotos->extension();
        $this->gphotos->storeAs('general_images', $imageName);
        $artical->G_PHOTO = $imageName;

        $artical->G_Description  = $this->gdescription;

        $artical->save();

        // Mail::to($this->user())->send(new RegisteredUserController());

        session()->flash('message', 'Article has been created successfully!');
        $this->dispatchBrowserEvent('hide_modal');
    }
    // add general
    public function render()
    {
        $generals = Cache::remember('generals', now()->addMinutes(10), function () {
            // try{
            //     $a = 1/0;
            // }catch(\Throwable $th){
            //     // dd('catched');
            //     report($th);
            // }
            // return response()->file('x.txt');
            // abort(404,'Not Found');
            // throw new DemoException('some error occured!');
            return General::all();
        });

        $gheaders = Cache::remember('gheaders', now()->addMinutes(10), function () {
            return GHeader::all();
        });

        // $gheaders = GHeader::all();

        return view('livewire.add-general-component', ["gheaders" => $gheaders, "generals" => $generals])->layout('layouts.base');
    }
}
