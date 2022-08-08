<?php

use App\Http\Controllers\AuthController;
use App\Http\Livewire\AddGeneralComponent;
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
use App\Models\General;
use Faker\Generator;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');

Route::get('/registration', RegistrationLoginComponent::class)->name('registrationlogin');
// For General
Route::get('/general', GeneralComponent::class)->name('general');
Route::get('/detailarticle/{General_ID}', GeneralDetailComponent::class)->name('detailarticle');
Route::get('/rooms', RoomComponent::class)->name('rooms');
Route::get('/job', JobComponent::class)->name('job');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    // For Rooms
    // Route::get('/rooms', RoomComponent::class)->name('rooms');
    Route::get('/contact', ContactComponent::class)->name('contact');
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
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

// Social Media Authentication
Route::get('login/google',[AuthSocialComponent::class, 'redirectToGoogle'])->name('googleauth');
Route::get('auth/google/callback',[AuthSocialComponent::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook',[AuthSocialComponent::class, 'redirectToFacebook'])->name('facebookauth');
Route::get('auth/facebook/callback',[AuthSocialComponent::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github',[AuthSocialComponent::class, 'redirectToGithub'])->name('githubauth');
Route::get('auth/github/callback',[AuthSocialComponent::class, 'handleGithubCallback']);

// Route::resource('login',[AuthSocialComponent::class]);
