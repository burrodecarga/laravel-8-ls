<?php

use App\Http\Livewire\ListOfJobs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\RoleController;
use App\Http\Livewire\ListOfPosts;
use App\Http\Livewire\ListOfRoles;
use App\Http\Livewire\ListOfUsers;
use App\Http\Livewire\ShowJob;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/users',ListOfUsers::class)->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/posts',ListOfPosts::class)->name('posts');

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs',ListOfJobs::class)->name('jobs');

Route::middleware(['auth:sanctum', 'verified'])->get('/roles-permissions',ListOfRoles::class)->name('roles-permissons');


Route::resources([
    'roles' => RoleController::class,
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/apply/{id}',[ShowJob::class,'apply'])->name('apply');

// Route::middleware(['auth:sanctum', 'verified'])->get('/roles',[RoleController::class,'index'])->name('roles.index');

