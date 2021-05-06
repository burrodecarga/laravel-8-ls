<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\State;
use Livewire\Component;

class CreatePost extends Component
{

    public $open = true;

    public function render()
    {
        $states = State::all()->pluck('name');
        $schedules = Schedule::all()->pluck('name');
        
        return view('livewire.create-post',[
         'states' => $states,
         'schedules' => $schedules
        ]);
    }
}
