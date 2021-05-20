<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SendMessage extends Component
{
    public $open = false;
    public $title;
    public $body;
    public $company;

    public function render()
    {
        return view('livewire.send-message');
    }
}
