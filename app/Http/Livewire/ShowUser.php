<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{

    protected $listeners = ['showUser'];
    protected  $rules = [
        'name' => 'required|max:100',
        'email' => 'required|max:100',
        'role' => 'required',
        'userId' => 'required'
          ];
    public $showPost = false;


    public $name, $email, $role;
    public $user,$userId = null;
    public $showUser = false;


    public function render()
    {
        return view('livewire.show-user');
    }

    public function showUser(User $user)
    {
        //dd($user->id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->showUser = true;
    }

    public function updateUser()
    {

        $values = $this->validate($this->rules);
        $this->user = User::find($values['userId']);
        $this->user->name = $values['name'];
        $this->user->email = $values['email'];
        $this->user->role = $values['role'];
        $this->user->save();

        $this->emit('render');
        $this->showPost = false;
        $this->emit('alert', 'the User was updated successfully');
        $this->reset();

    }
}
