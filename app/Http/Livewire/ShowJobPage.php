<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowJobPage extends Component
{
    protected $listeners = ['showJob'];

    public $showJob='hidden';


    public $title, $position, $responsibilities, $qualifications, $schedule, $class;
    public $min_salary, $max_salary, $state, $city, $body,$postId;
    public $post = null;

    public function render()
    {
        return view('livewire.show-job-page');
    }


    public function showJob($post)
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
        $this->showJob = '';
    }


    public function apply($id)
    {
        dd($id);
    }




}
