<?php

use App\Http\Livewire\ListOfJobs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\RoleController;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\FocalPoits;
use App\Http\Livewire\FocalPoitsShow;
use App\Http\Livewire\ListOfPosts;
use App\Http\Livewire\ListOfRoles;
use App\Http\Livewire\ListOfUsers;
use App\Http\Livewire\ShowJob;
use App\Http\Livewire\ShowLegal;
use App\Http\Livewire\SkillList;
use App\Http\Livewire\UserCv;
use App\Http\Livewire\UserExperience;
use App\Http\Livewire\UserFiles;
use App\Http\Livewire\UserProfile;
use App\Http\Livewire\UserSkills;

Route::get('/', function () {
    return view('welcome')->layout('layouts.bpp');
});

Route::get('/about', function () {
    return view('about')->layout('layouts.bpp');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/candidates', function () {
    return view('candidates')->layout('layouts.bpp');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/employers', function () {
    return view('employers')->layout('layouts.bpp');
});

Route::get('/services', function () {
    return view('services')->layout('layouts.bpp');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/contact', ContactUs::class);

Route::get('/skype-interview', function () {
    return view('skype-interview')->layout('layouts.cpp');
});

Route::get('/work-from-home', function () {
    return view('work-from-home')->layout('layouts.cpp');
});

Route::get('/keep-your-job', function () {
    return view('keep-your-job')->layout('layouts.cpp');
});

Route::get('/job-interview', function () {
    return view('job-interview')->layout('layouts.cpp');
});

Route::get('/interview-prepare', function () {
    return view('interview-prepare')->layout('layouts.cpp');
});

Route::get('/cv-mistakes', function () {
    return view('cv-mistakes')->layout('layouts.cpp');
});

Route::get('/successfull-cv', function () {
    return view('successfull-cv')->layout('layouts.cpp');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard')->layout('layouts.bpp');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/laboral', function () {
    return view('laboral.show');
})->name('laboral');

Route::middleware(['auth:sanctum', 'verified'])->get('/resume', UserCv::class)->name('resume');

Route::middleware(['auth:sanctum', 'verified'])->get('/user-files', UserFiles::class)->name('user-files');

Route::middleware(['auth:sanctum', 'verified'])->get('/focal-points',FocalPoits::class)->name('focal-points');

Route::middleware(['auth:sanctum', 'verified'])->get('/focal-points/{focal}',FocalPoitsShow::class)->name('focal-points-show');





Route::middleware(['auth:sanctum', 'verified'])->get('/users',ListOfUsers::class)->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/posts',ListOfPosts::class)->name('posts');

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs',ListOfJobs::class)->name('jobs');

Route::middleware(['auth:sanctum', 'verified'])->get('/roles-permissions',ListOfRoles::class)->name('roles-permissons');


Route::resources([
    'roles' => RoleController::class,
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/apply/{id}',[ShowJob::class,'apply'])->name('apply');

Route::middleware(['auth:sanctum', 'verified'])->get('/legal',ShowLegal::class)->name('legal');

Route::middleware(['auth:sanctum', 'verified'])->get('/user-profile',UserProfile::class)->name('user-profile');

Route::middleware(['auth:sanctum', 'verified'])->get('/experiences',UserExperience::class)->name('experiences');

Route::middleware(['auth:sanctum', 'verified'])->get('/skills', function () {
    return view('skills.index')->layout('layouts.cpp');
})->name('skills.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/user-skills',UserSkills::class)->name('user-skills');


