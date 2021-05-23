<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomePage extends Component
{
   public $post;
    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->get()->take(10);

        return view('livewire.home-page',['posts'=>$posts]);
    }

    public function showJob(Post $post)
    {

        if (Auth::user()) {
           return redirect()->route('jobs');
        }else{
            return redirect()->guest('login');
        }
    }
}
