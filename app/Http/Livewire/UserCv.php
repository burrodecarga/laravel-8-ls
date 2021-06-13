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
        if($profile and $experiences){
           return view('livewire.user-cv')->layout('layouts.cpp');
        }else{
            return redirect()->back();
        }


    }
}
