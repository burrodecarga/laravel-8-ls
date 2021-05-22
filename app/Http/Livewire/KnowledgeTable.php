<?php

namespace App\Http\Livewire;

use App\Models\Knowledge;
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

    public function destroy(Knowledge $knowledge)
    {
        $knowledge->delete();
    }

    public function level(Knowledge $knowledge)
    {
        $level = $knowledge->level;
        $level = $level+1;
        if($level>6){$level = 1;}
        $knowledge->level = $level;
        $knowledge->save();
        $this->render();
    }


}
