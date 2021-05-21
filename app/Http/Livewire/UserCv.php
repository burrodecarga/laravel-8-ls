<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserCv extends Component
{
    public function render()
    {
        $user = auth()->user();
        $experiences = $user->experiences;
        $profile = $user->profile;
        $tags = $user->tags;

        return view('livewire.user-cv',[
            'experiences' =>$experiences,
            'profile' =>$profile,
            'tags' =>$tags
        ])->layout('layouts.cpp');
    }
}
