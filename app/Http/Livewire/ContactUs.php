<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactUs extends Component
{

    public $title;
    public $body;
    public $company;

    protected  $rules = [
        'title' => 'required|max:100',
        'body' => 'required|min:10'];

    public function render()
    {
        return view('livewire.contact-us')->layout('layouts.bpp',[
            'pageClass' =>'s8',
            'classTitulo' =>'text-white text-center  max-w-3xl md:max-w-4xl font-bold m-auto text-2xl sm:text-3xl md:text-5xl text-wrap',
            'classSubTitulo' =>'text-white text-center  max-w-3xl md:max-w-4xl m-auto  text-2xs sm:text-xl text-wrap my-10',
            'pageSubTitulo' =>'We will be happy to assist you as soon as possible.',
            'pageTitulo' =>'Contact Us Today.'
        ]);
    }

    public function create(){
        $this->validate();
        Message::create([
            'subject' => $this->title,
            'body' => $this->body,
            'user_id' => auth()->user()->id,
            'read' =>0
        ]);
        $this->emit('alert', 'Yor message was send successfully');
        $this->reset();
    }
}
