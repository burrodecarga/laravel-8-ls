<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class KnowledgeTable extends Component
{
    protected $listeners = ['dibujar'];
    use WithPagination;

    public function render()
    {
        $knowledge = auth()->user()->knowledge()->paginate(10);

        return view('livewire.knowledge-table',['knowledge'=>$knowledge]);
    }
    public function dibujar()
    {
        $this->render();
    }


}
