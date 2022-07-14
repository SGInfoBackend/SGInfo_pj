<?php

use App\Http\Livewire\AddGeneralComponent;
use App\Http\Livewire\AddHouseComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\JobComponent;
use App\Http\Livewire\AddJobComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\ApplyJobComponent;
use App\Http\Livewire\GeneralComponent;
use App\Http\Livewire\GeneralDetailComponent;
use App\Http\Livewire\JobDetailsComponent;
use App\Http\Livewire\RoomComponent;
use App\Http\Livewire\RoomDetailComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Models\General;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('home');
Route::get('/rooms', RoomComponent::class)->name('rooms');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/job', JobComponent::class)->name('job');
Route::get('/addjob', AddJobComponent::class)->name('addjob');
// For General
Route::get('/general', GeneralComponent::class)->name('general');
Route::get('/addarticle', AddGeneralComponent::class)->name('addarticle');
Route::get('/detailarticle/{General_ID}', GeneralDetailComponent::class)->name('detailarticle');
// End General
Route::get('/addrom', AddHouseComponent::class)->name('addroom');
Route::get('/roomdetail/{Rent_House_ID}', RoomDetailComponent::class)->name('roomdetails');
// Job Details
Route::get('/job/job-details/{Job_ID}', JobDetailsComponent::class)->name('jobdetails');

// Applying Job
Route::get('/applyjob/{Job_title}', ApplyJobComponent::class)->name('applyjob');




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// For User
// Route::middleware(['auth:sanctum', 'verified'])->group(function() {
//     Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
// });


// // For Admin
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
//     Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
// });
