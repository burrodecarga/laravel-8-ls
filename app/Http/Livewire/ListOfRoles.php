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
        $roles = $roles->each(function($role){
            $role->cont_user = User::role($role->name)->count();
        });
        return view('livewire.list-of-roles',compact('roles'));
    }

    public function showRole(Role $role)
    {

        $this->emit('showRole',$role);

    }


}
