<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminCandidate extends Component
{
    public $post;

    protected $listeners = ['administrar'];

    public function mount($post)
    {
         $this->post = $post;

    }

    public function render()
    {

        return view('livewire.admin-candidate')->layout('layouts.cpp');
    }

    public function administrar()
    {
        alert('xxx');
    }
}
