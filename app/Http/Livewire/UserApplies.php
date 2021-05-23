<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserApplies extends Component
{
    public function render()
    {
        $posts = auth()->user()->posts;
        // dd($posts);
        return view('livewire.user-applies',['posts'=>$posts])->layout('layouts.cpp');
    }
}
