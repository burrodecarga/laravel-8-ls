<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowUserModal extends Component
{
    public $showModal ='hidden';

    protected $listeners =['showModal'];

    public function render()
    {
        return view('livewire.show-user-modal');
    }

    public function showModal($user){
       $this->showModal ='';
    }

    public function closeModal(){
        $this->showModal ='hidden';
    }
}
