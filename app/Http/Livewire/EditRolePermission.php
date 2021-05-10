<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditRolePermission extends Component
{
   public $showModal='hidden';
    public function render()
    {
        return view('livewire.edit-role-permission');
    }

    public function toogleModal($model_id, $model)
    {
        $this->showModal = $this->showModal ? false:true;
    }
}
