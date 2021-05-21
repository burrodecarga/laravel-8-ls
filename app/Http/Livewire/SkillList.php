<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Skill;
use Livewire\Component;

class SkillList extends Component
{



      public function render()
    {
        $skills = auth()->user()->skills;

        return view('livewire.skill-list',[
            'skills' =>$skills,
        ])->layout('layouts.cpp');
    }





}
