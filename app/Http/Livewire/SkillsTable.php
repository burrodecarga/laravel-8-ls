<?php

namespace App\Http\Livewire;

use App\Models\Skill;
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

    public function level(Skill $skill)
    {
        $level = $skill->level_id;
        $level = $level+1;
        if($level>6){$level = 1;}
        $skill->level_id = $level;
        $skill->save();
        $this->render();
    }
}
