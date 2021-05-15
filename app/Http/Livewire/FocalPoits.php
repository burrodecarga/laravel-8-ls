<?php

namespace App\Http\Livewire;

use App\Models\Focal;
use Livewire\Component;

class FocalPoits extends Component
{
    public function render()
    {
        $focalPoints = Focal::all();
        return view('livewire.focal-poits',['focalPoints'=>$focalPoints]);
    }
}
