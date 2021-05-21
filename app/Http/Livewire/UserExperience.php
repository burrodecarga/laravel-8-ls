<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Illuminate\Support\Carbon;
use Livewire\Component;

class UserExperience extends Component
{

    public $formCreate ='';
    public $formUpdate ='hidden';

      protected $listeners = ['editExp'];
       public $user_id = '';
       public $expId;
       public $company = '';
       public $position = '';
       public $description = '';
       public $date_begin;
       public $date_end;

       public function render()
    {
        $experience = auth()->user()->experiences;

        return view('livewire.user-experience')->layout('layouts.cpp');
    }




    public function createData()
    {
        $rules = [
            'company' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'date_begin' => 'required|date',
            'date_end' => 'required|date',

              ];
        $values = $this->validate($rules);

        auth()->user()->experiences()->Create(
            [
                'user_id' => auth()->user()->id,
                'company' => $values['company'],
                'position' => $values['position'],
                'description' => $values['description'],
                'date_begin' => $values['date_begin'],
                'date_end' => $values['date_end'],
            ]
        );
        $this->emit('alert', 'Laboral experience was add successfully');
        $this->reset();
        $this->emit('renderList');
    }

    public function updateData()
    {
        $rules = [
            'company' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'date_begin' => 'required|date',
            'date_end' => 'required|date',
            'expId' =>'required|numeric',
              ];

        $values = $this->validate($rules);
        $experience = Experience::find($values['expId']);
        //dd($experience);
         $experience->company = $this->company;
        $experience->position = $this->position;
         $experience->description =$this->description;
        $experience->date_begin= $this->date_begin;
        $experience->date_end=$this->date_end;
        $experience->save();
        $this->formUpdate ='hidden';
        $this->formCreate = '';
        $this->emit('alert', 'Laboral experience was updated successfully');
        $this->reset();
        $this->emit('renderList');
        $this->render();

    }



    public function editExp($experiences){
        $this->formCreate ='hidden';
        $this->formUpdate ='';
        $this->company = $experiences['company'];
        $this->position = $experiences['position'];
        $this->description = $experiences['description'];
        $this->date_begin = $experiences['date_begin'];
        $this->date_end = $experiences['date_end'];
        $this->render();
        $this->expId = $experiences['id'];

    }



}
