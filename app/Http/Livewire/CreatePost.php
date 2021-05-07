<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Schedule;
use App\Models\State;
use Livewire\Component;
use Illuminate\Support\Str;

class CreatePost extends Component
{

    public $open = false;
    public $title,$position,$responsibilities,$qualifications,$schedule,$class;
    public $min_salary,$max_salary,$state,$city,$body;


    public function render()
    {
        $states = State::all()->pluck('name');
        $schedules = Schedule::all()->pluck('name');

        return view('livewire.create-post',[
         'states' => $states,
         'schedules' => $schedules
        ]);
    }

    public function create(){
        $slug =Str::slug($this->schedule);
        $class = Schedule::where('slug',$slug)->pluck('class')->join('');
       Post::create([
           'title' =>$this->title,
           'position' =>$this->position,
           'body' =>$this->body,
           'qualifications' =>$this->qualifications,
           'responsibilities' =>$this->responsibilities,
           'state' =>$this->state,
           'city' =>$this->city,
           'schedule' =>$this->schedule,
           'class' =>$class,
           'min_salary' =>$this->min_salary,
           'max_salary' =>$this->max_salary,
           'active'=>true
       ]);

//       $this->reset();

       $this->emit('render');
       $this->emit('alert','Post Creado Correctamente');
       $this->reset();
    }
}
