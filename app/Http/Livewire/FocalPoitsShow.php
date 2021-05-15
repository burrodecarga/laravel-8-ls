<?php

namespace App\Http\Livewire;

use App\Models\Focal;
use Livewire\Component;

class FocalPoitsShow extends Component
{
    public $slug;

    public function render()
    {
        $point = Focal::where('slug',$this->slug)->get();
        dd($point);
        return view('livewire.focal-poits-show',['point'=>$point]);
    }
}
