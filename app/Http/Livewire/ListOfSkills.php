<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use App\Models\Tag;
use Livewire\Component;

class ListOfSkills extends Component
{
    protected $listeners = ['listOfSkills'=>'render'];

    public function render()
    {

        $skills = auth()->user()->tags;

        return view('livewire.list-of-skills',['skills'=>$skills])->layout('layouts.cpp');
    }

    public function destroy(Tag $tag){
        $tag->delete();
    }
}
