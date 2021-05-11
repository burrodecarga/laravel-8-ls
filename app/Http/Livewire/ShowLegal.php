<?php

namespace App\Http\Livewire;

use App\Models\Apply;
use App\Models\Legal;
use Livewire\Component;

class ShowLegal extends Component
{
    public $postId;
    public $candidateId;

    public function render()
    {
        return view('livewire.show-legal');
    }

    public function declare()
    {
        Legal::create([
        'user_id'=> auth()->user()->id
        ]);
    }
}
