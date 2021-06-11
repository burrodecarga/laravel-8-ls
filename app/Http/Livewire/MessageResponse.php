<?php

namespace App\Http\Livewire;

use App\Mail\ResponseOfMessage;
use App\Models\Message;
use App\Models\Response;
use Illuminate\Support\Facades\Mail;

use Livewire\Component;


class MessageResponse extends Component
{

    public function __construct(){
    }

    public function mount(Message $message){
     $this->$message = $message;
    }

    public $message,$para;
    public $subject,$body,$message_id;
    public $name = 'Edwin Henriquez';
    public $email ='edwinhenriquezh@gmail.com';

    protected $rules = [
        'subject' =>'required',
        'body' => 'required',
    ];

    public function render()
    {
        return view('livewire.message-response',compact(['message'=>$this->message]))->layout('layouts.cpp');;
    }

    public function store(Message $message){

        $this->validate($this->rules);
        $response = new Response();
        $response->subject = $this->subject;
        $response->body = $this->body;
        $response->message_id = $message->id;
        $response->save();

        $message->read = 1;
        $message->update();

        $this->para =$message->user->email;
        $this->message_id = $message->id;


        Mail::to($message->user->email)
        ->queue(new ResponseOfMessage($this->subject,$this->message_id,$this->body,$this->para));
        $this->subject="";
        $this->body="";
        session()->flash('success', 'Content Created Successfully.');
        return redirect('/messages');

    }
}
