<?php

namespace App\Http\Livewire;

use App\Models\Level;
use Livewire\Component;
use Livewire\WithPagination;

class UserSkills extends Component
{

    use WithPagination;

    public function render()
    {
        $skills = auth()->user()->skills(100);

        return view('livewire.user-skills',[
            'skills' =>$skills,
        ])->layout('layouts.cpp');
    }


}
