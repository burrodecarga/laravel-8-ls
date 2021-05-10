<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRole extends Component
{
    public $showRole = false;
    public $role=null;
    public $name = '';
    public $roleId =0;


    protected $listeners = ['showRole'];
    protected  $rules = [
        'name' => 'required',
        'roleId' => 'required|numeric'
    ];



    public function render()
    {
        return view('livewire.show-role');
    }

    public function showRole(Role $role)
    {
        $this->name = $role->name;
        $this->roleId = $role->id;
        $this->showRole = true;
    }

    public function updateRole()
    {
        $values = $this->validate($this->rules);
        if($values['roleId']==5){
            $this->showRole = false;
            $this->emit('error', 'This Role is no mutable');
            $this->reset();
        }else{
        $this->role = Role::find($values['roleId']);
        $this->role->name = $values['name'];
        $this->role->save();
        $this->emit('render');
        $this->showRole = false;
        $this->emit('alert', 'Role offer was updated successfully');
        $this->reset();}


    }
}
