<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserSkills extends Component
{
    public function render()
    {
        $skills = auth()->user()->skills;

        return view('livewire.user-skills',[
            'skills' =>$skills
        ])->layout('layouts.cpp');
    }
}
