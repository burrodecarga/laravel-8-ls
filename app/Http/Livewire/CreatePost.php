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
    public $title, $position, $responsibilities, $qualifications, $schedule, $class;
    public $min_salary, $max_salary, $state, $city, $body;

    protected  $rules = [
        'title' => 'required|max:100',
        'position' => 'required|max:100',
        'body' => 'required|min:100',
        'qualifications' => 'required|min:100',
        'responsibilities' => 'required|min:100',
        'state' => 'required',
        'city' => 'required',
        'schedule' => 'required',
        'min_salary'=> 'required|numeric',
        'max_salary' => 'required|numeric'
    ];


    public function render()
    {
        $states = State::all()->pluck('name');
        $schedules = Schedule::all()->pluck('name');

        return view('livewire.create-post', [
            'states' => $states,
            'schedules' => $schedules
        ]);
    }

    public function create()
    {
        $this->validate();

        $slug = Str::slug($this->schedule);
        $class = Schedule::where('slug', $slug)->pluck('class')->join('');
        Post::create([
            'title' => $this->title,
            'position' => $this->position,
            'body' => $this->body,
            'qualifications' => $this->qualifications,
            'responsibilities' => $this->responsibilities,
            'state' => $this->state,
            'city' => $this->city,
            'schedule' => $this->schedule,
            'class' => $class,
            'min_salary' => $this->min_salary,
            'max_salary' => $this->max_salary,
            'active' => false,
            'user_id' => auth()->user()->id
        ]);

        //       $this->reset();

        $this->emitTo('ListOfpost', 'render');
        $this->emit('AdminPostrender');
        $this->emit('alert', 'Job offer was created successfully');
        $this->reset();
    }
}
