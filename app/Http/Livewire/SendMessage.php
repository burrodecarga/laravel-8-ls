<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class SendMessage extends Component
{
    public $open = false;
    public $title;
    public $body;
    public $company;

    protected  $rules = [
        'title' => 'required|max:100',
        'body' => 'required|min:100'];


    public function render()
    {
        return view('livewire.send-message');
    }

    public function create(){
        $this->validate();
        Message::create([
            'title' => $this->title,
            'body' => $this->body,
            'user_id' => auth()->user()->id
        ]);
        $this->emit('alert', 'Yor message was send successfully');
        $this->reset();
    }
}
