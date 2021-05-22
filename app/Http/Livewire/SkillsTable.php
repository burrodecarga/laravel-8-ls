<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SkillsTable extends Component
{
    public function render()
    {
        $skills = auth()->user()->skills;
        return view('livewire.skills-table',['skills'=>$skills]);
    }
}
