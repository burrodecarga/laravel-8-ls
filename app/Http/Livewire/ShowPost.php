<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Salary;
use App\Models\Schedule;
use App\Models\State;
use Livewire\Component;
use Illuminate\Support\Str;

class ShowPost extends Component
{
    protected $listeners = ['showPost'];
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
        'max_salary' => 'required|numeric',
        'postId' => 'required|numeric'
    ];
    public $showPost = false;


    public $title, $position, $responsibilities, $qualifications, $schedule, $class;
    public $min_salary, $max_salary, $state, $city, $body,$postId;
    public $post = null;





    public function render()
    {
        $salaries = Salary::all();
        $states = State::all()->pluck('name');
        $schedules = Schedule::all()->pluck('name');
        return view(
            'livewire.show-post',
            [
                'salaries' => $salaries,
                'states' => $states,
                'schedules' => $schedules
            ]
        );
    }


    public function showPost($post)
    {
        $this->postId = $post['id'];
        $this->title = $post['title'];
        $this->position = $post['position'];
        $this->body = $post['body'];
        $this->responsibilities = $post['responsibilities'];
        $this->qualifications = $post['qualifications'];
        $this->state = $post['state'];
        $this->city = $post['city'];
        $this->schedule = $post['schedule'];
        $this->max_salary = $post['max_salary'];
        $this->min_salary = $post['min_salary'];
        $this->showPost = true;
    }

    public function updatePost()
    {
        $values = $this->validate($this->rules);
        $this->post = Post::find($values['postId']);
        $slug = Str::slug($this->schedule);
        $class = Schedule::where('slug', $slug)->pluck('class')->join('');

        $this->post->title = $values['title'];
        $this->post->position = $values['position'];
        $this->post->qualifications = $values['qualifications'];
        $this->post->body = $values['body'];
        $this->post->responsibilities = $values['responsibilities'];
        $this->post->schedule = $values['schedule'];
        $this->post->class = $class;
        $this->post->state = $values['state'];
        $this->post->city = $values['city'];
        $this->post->max_salary = $values['max_salary'];
        $this->post->min_salary = $values['min_salary'];
        $this->post->save();

        $this->emit('render');
        $this->showPost = false;
        $this->emit('alert', 'Job offer was updated successfully');
        $this->reset();

    }
}
