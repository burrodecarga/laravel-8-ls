<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\Response;
use Livewire\Component;

class Campanita extends Component
{
    public function render()
    {
        $total = 0;
        $user = auth()->user();
        if ($user->hasanyrole('admin', 'super-admin')) {
            $messages = Message::where('read', 0)->get();
            $total = $messages->count();
        }
        if ($user->hasanyrole('candidate', 'employer')) {
            $enviados = $user->messages;
            //$total =($enviados->where('read',0)->count());
            foreach ($enviados as $enviado){
                 $respuestas = $enviado->responses;
                 foreach ($respuestas as $r){
                     if($r->read == 0){ $total = $total+1;}
                 }
            }
            }
        $pendientes = $total;
        return view('livewire.campanita', compact('pendientes'));
    }



}
