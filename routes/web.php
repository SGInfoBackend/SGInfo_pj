<?php

use App\Http\Livewire\AddHouseComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\JobComponent;
use App\Http\Livewire\AddJobComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\ApplyJobComponent;
use App\Http\Livewire\AuthSocialComponent;
use App\Http\Livewire\GeneralComponent;
use App\Http\Livewire\GeneralDetailComponent;
use App\Http\Livewire\JobDetailsComponent;
use App\Http\Livewire\RegistrationLoginComponent;
use App\Http\Livewire\RoomComponent;
use App\Http\Livewire\RoomDetailComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\UserProfileComponent;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home');

Route::get('/registration', RegistrationLoginComponent::class)->name('registrationlogin');
// For General
Route::get('/general', GeneralComponent::class)->name('general');
Route::get('/detailarticle/{General_ID}', GeneralDetailComponent::class)->name('detailarticle');
Route::get('/rooms', RoomComponent::class)->name('rooms');
Route::get('/job', JobComponent::class)->name('job');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Artisan::call('user:create --count=10');
    
    // For Rooms
    // Route::get('/rooms', RoomComponent::class)->name('rooms');    Route::get('/contact', ContactComponent::class)->name('contact');
    Route::get('/addjob', AddJobComponent::class)->name('addjob');
    // For General
    Route::get('/addarticle', GeneralComponent::class)->name('addarticle');
    // End General
    Route::get('/addrom', AddHouseComponent::class)->name('addroom');
    Route::get('/roomdetail/{Rent_House_ID}', RoomDetailComponent::class)->name('roomdetails');
    // Job Details
    Route::get('/job/job-details/{Job_ID}', JobDetailsComponent::class)->name('jobdetails');
    // Applying Job
    Route::get('/applyjob/{Job_title}', ApplyJobComponent::class)->name('applyjob');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
});

// For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

// Social Route Grouping
$subjects = ['login', 'auth'];

foreach ($subjects as $subject) {

    Route::controller(AuthSocialComponent::class)->prefix($subject)->group(function () {
        Route::get('/google', 'redirectToGoogle')->name('googleauth');
        Route::get('/facebook', 'redirectToFacebook')->name('facebookauth');
        Route::get('/github', 'redirectToGithub')->name('githubauth');
        // Redirect Route
        Route::get('/google/callback', 'handleGoogleCallback');
        Route::get('/facebook/callback', 'handleFacebookCallback');
        Route::get('/github/callback', 'handleGithubCallback');
    });
}
