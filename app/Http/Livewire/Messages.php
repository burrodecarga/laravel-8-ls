<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class Messages extends Component
{
    use WithPagination;


    public function render()
    {
        $messages = Message::orderBy('created_at','desc')
                            ->orderBy('read','asc')->paginate(5);

        return view('livewire.messages',compact('messages'))->layout('layouts.cpp');
    }
}
