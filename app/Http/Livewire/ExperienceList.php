<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ExperienceList extends Component
{
    use WithPagination;

    public $listeners =['render', 'renderList'=>'render'];



    public $experience =null;
    public $company = '';
    public $position = '';
    public $description = '';
    public $date_begin;
    public $date_end;




    public function render()
    {
        $experiences = Experience::where('user_id', Auth::id())->paginate(3);
        return view('livewire.experience-list',
    [
        'experiences' =>$experiences
    ]);
    }

    public function editExp(Experience $experiences)
    {
        $this->$experiences = $experiences;
        $this->emit('editExp',$experiences);
    }

    public function delExp(Experience $experiences)
    {
        $experiences->delete();
        $this->emit('renderList');
    }


}
