<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class EmployerPosts extends Component
{
    use WithPagination;
    public function render()
    {
        $posts = Post::where('user_id',auth()->user()->id)
                       ->orderBy('created_at','desc')->get();


        //dd($posts->count());
        //dd($posts,auth()->user()->id);
        return view('livewire.employer-posts',compact(['posts']))->layout('layouts.cpp');
    }
}
