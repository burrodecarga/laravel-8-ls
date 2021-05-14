<?php

use App\Http\Livewire\ListOfJobs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\RoleController;
use App\Http\Livewire\ListOfPosts;
use App\Http\Livewire\ListOfRoles;
use App\Http\Livewire\ListOfUsers;
use App\Http\Livewire\ShowJob;
use App\Http\Livewire\ShowLegal;
use App\Http\Livewire\SkillList;
use App\Http\Livewire\UserExperience;
use App\Http\Livewire\UserProfile;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/laboral', function () {
    return view('laboral.show');
})->name('laboral');


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
    return view('skills.index');
})->name('skills.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/user-skills',SkillList::class)->name('user-skills');
