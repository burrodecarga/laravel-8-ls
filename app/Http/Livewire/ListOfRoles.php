<?php

namespace App\Http\Livewire;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class ListOfRoles extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $roles = Role::all();
        return view('livewire.list-of-roles',compact('roles'))->layout('layouts.cpp');
    }

    public function showRole(Role $role)
    {

        $this->emit('showRole',$role);

    }


}
