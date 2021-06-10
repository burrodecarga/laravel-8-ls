<?php

use App\Http\Livewire\ListOfJobs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Livewire\AdminCandidate;
use App\Http\Livewire\CategoryList;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\EmployerPosts;
use App\Http\Livewire\FocalPoits;
use App\Http\Livewire\FocalPoitsShow;
use App\Http\Livewire\ListOfPosts;
use App\Http\Livewire\ListOfRoles;
use App\Http\Livewire\ListOfSkills;
use App\Http\Livewire\ListOfUsers;
use App\Http\Livewire\ShowJob;
use App\Http\Livewire\ShowLegal;
use App\Http\Livewire\SkillList;
use App\Http\Livewire\Skills;
use App\Http\Livewire\UserApplies;
use App\Http\Livewire\UserCv;
use App\Http\Livewire\UserExperience;
use App\Http\Livewire\UserFiles;
use App\Http\Livewire\UserProfile;
use App\Http\Livewire\UserSkills;
use App\Models\User;
use PharIo\Manifest\Url;

Route::get('/', function () {
    return view('welcome')->layout('layouts.bpp');
});

Route::get('/home', function () {
    return view('home')->layout('layouts.bpp');
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

Route::middleware(['auth:sanctum', 'verified','role:admin'])->get('/admin', function () {
    return view('admin')->layout('layouts.cpp');
})->name('admin');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard')->layout('layouts.cpp');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/laboral', function () {
    return view('laboral.show');
})->name('laboral');

Route::middleware(['auth:sanctum', 'verified'])->get('/resume', UserCv::class)->name('resume');

Route::middleware(['auth:sanctum', 'verified'])->get('/user-files', UserFiles::class)->name('user-files');

Route::middleware(['auth:sanctum', 'verified'])->get('/focal-points',FocalPoits::class)->name('focal-points');

Route::middleware(['auth:sanctum', 'verified'])->get('/focal-points/{focal}',FocalPoitsShow::class)->name('focal-points-show');


Route::middleware(['auth:sanctum', 'verified','role:admin|super-admin'])->get('/users',ListOfUsers::class)->name('users');

Route::middleware(['auth:sanctum', 'verified','role:super-admin|admin'])->get('/posts',ListOfPosts::class)->name('posts');

Route::middleware(['auth:sanctum', 'verified','role:candidate|employers'])->get('/jobs',ListOfJobs::class)->name('jobs');

Route::middleware(['auth:sanctum', 'verified','role:super-admin|admin'])->get('/roles-permissions',ListOfRoles::class)->name('roles-permissons');


Route::resource('roles', RoleController::class)->names('roles')->middleware(['auth:sanctum','verified','role:super-admin|admin']);

Route::get('rutas', [RoleController::class,'rutas'])->name('rutas')
->middleware('role:super-admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/apply/{id}',[ShowJob::class,'apply'])->name('apply');

Route::middleware(['auth:sanctum', 'verified','role:candidate'])->get('/legal',ShowLegal::class)->name('legal');

Route::middleware(['auth:sanctum', 'verified','role:candidate'])->get('/user-profile',UserProfile::class)->name('user-profile');

Route::middleware(['auth:sanctum', 'verified','role:candidate'])->get('/experiences',UserExperience::class)->name('experiences');
Route::middleware(['auth:sanctum', 'verified','role:candidate|employer'])->get('/user-applies',UserApplies::class)->name('user-applies');

Route::middleware(['auth:sanctum', 'verified','role:candidate'])->get('/user-skills',UserSkills::class)->name('user-skills');


Route::middleware(['auth:sanctum', 'verified','role:admin|super-admin'])->get('/skills',Skills::class)->name('skills');

Route::middleware(['auth:sanctum', 'verified','role:admin|super-admin'])
->get('/categories',CategoryList::class)->name('categories');



Route::get(
    '/admin-candidates/{id}',
    [AdminController::class, 'show']
)->name('admin-candidates')->middleware(['role:admin|super-admin']);


Route::middleware(['auth:sanctum', 'verified','role:employer'])->get('/employer-posts',EmployerPosts::class)->name('employer-posts');


Route::middleware(['auth:sanctum', 'verified'])->get('/jobMe', function (){
   auth()->user()->assignRole('candidate');
   return back();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/employerMe', function (){
    auth()->user()->assignRole('employer');
    return back();
 });

 Route::middleware(['auth:sanctum', 'verified','role:candidate|employer'])->get('/user/pdf/resume/{id}', function ($id){
   $user = User::find($id);
   return view('users.pdf.resume',compact('user'));
 });
