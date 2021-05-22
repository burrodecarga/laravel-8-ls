<?php

namespace App\Http\Livewire;

use App\Models\Focal;
use Livewire\Component;

class FocalPoitsShow extends Component
{
    public $slug;
    public Focal $focal;

    public function render()
    {

         $src =$this->focal->video;
        return view('livewire.focal-poits-show',['point'=>$this->focal,'src'=>$src])->layout('layouts.cpp');
    }
}
