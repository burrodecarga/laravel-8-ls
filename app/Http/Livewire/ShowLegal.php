<?php

namespace App\Http\Livewire;

use App\Models\Apply;
use App\Models\Legal;
use Livewire\Component;

class ShowLegal extends Component
{
    public $postId;
    public $candidateId;
    public $declare = false;

    public function render()
    {
        $this->declare = (auth()->user()->legals()->count() <> 0);
        return view('livewire.show-legal',['declare'=>$this->declare]);
    }

    public function declare()
    {
        Legal::create([
        'user_id'=> auth()->user()->id
        ]);
        $this->declare = true;
        $this->emit('alert', 'Your declaration has been registered');
        $this->emit('render');
    }
}
