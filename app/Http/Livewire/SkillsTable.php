<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SkillsTable extends Component
{
    protected $listeners = ['dibujar'];
    public $skill;

    public function render()
    {
        $skills = auth()->user()->skills;
        return view('livewire.skills-table',['skills'=>$skills]);
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
