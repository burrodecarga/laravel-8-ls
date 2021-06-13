<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\Response;
use Livewire\Component;
use Livewire\WithPagination;

class Responses extends Component
{
    use WithPagination;
    public function render()
    {
        $messages = Message::orderBy('created_at','desc')->where('user_id',auth()->user()->id)
        ->orderBy('read','asc')->paginate(2);
        return view('livewire.responses', compact('messages'))->layout('layouts.cpp');
    }

    public function marcar(Response $response){

        $response->read = 1;
        $response->save();
        $this->render();
    }
}
