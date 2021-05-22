<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserSkillsTable extends Component
{
    protected $listeners = ['dibujar'];
    public $skill;

    public function render()
    {
        $skills = auth()->user()->knowledge->where('status',0);
        return view('livewire.user-skills-table',['skills'=>$skills]);
    }


    public function dibujar()
    {
        $this->render();
    }

    public function destroy(Skill $skill)
    {
        auth()->user()->skills()->detach($skill->id);
    }

    public function level($skill_id)
    {


    }
}
