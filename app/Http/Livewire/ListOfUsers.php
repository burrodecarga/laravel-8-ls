<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfUsers extends Component
{
    use WithPagination;
    public $search = '';
    public $user_role = '';
    public $paginate = 5;
    public $campo = null;
    public $order = null;
    public $icon  = '-circle';
    public $showUser = 'hidden';
    protected $queryString = ['search', 'order', 'campo'];
    public $idUser = null;

    protected $listeners = ['delUser','render'];



    public function render()
    {
        $users = User::termino($this->search)
                ->role($this->user_role);

        if ($this->campo && $this->order) {
            $users = $users->orderBy($this->campo, $this->order);
        }

        $users = $users->paginate($this->paginate);

        return view('livewire.list-of-users', [
            'users' => $users
        ])->layout('layouts.cpp');
    }


    public function sorted($campo)
    {

        if ($this->campo !== $campo) {
            $this->order = null;
        }

        switch ($this->order) {
            case null:
                $this->order = 'asc';
                break;
            case 'asc':
                $this->order = 'desc';
                break;
            case 'desc':
                $this->order = null;
                break;
        }

        $this->campo = $campo;
        $this->icon = $this->iconDirection($this->order);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->reset();
    }

    public function iconDirection($sort): string
    {
        if (!$sort) {
            return '-circle';
        }
        return $sort === 'asc' ? '-arrow-circle-up' : '-arrow-circle-down';
    }


    public function mount()
    {
        $this->campo = $this->campo;
        $this->icon = $this->iconDirection($this->order);
    }

    public function showModal(User $user)
    {
       $this->emit('showModal',$user);
    }

    public function confirmDelete($idUser)
    {
      $this->idUser = $idUser;
      $this->dispatchBrowserEvent('confirm-delete-user');
    }

    public function delUser()
    {
        $user = User::find($this->idUser);
        $user->delete();
        $this->dispatchBrowserEvent('deleted');
    }

    public function showUser(User $user)
    {
      $this->emit('showUser',$user);
    }


}
