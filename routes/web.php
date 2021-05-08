<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ListOfPosts;
use App\Http\Livewire\ListOfUsers;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/users',ListOfUsers::class)->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/posts',ListOfPosts::class)->name('posts');



