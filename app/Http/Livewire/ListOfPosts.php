<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ListOfPosts extends Component
{
    use WithPagination;
    public $search = '';
    public $paginate = 5;
    public $campo = null;
    public $order = null;
    public $icon  = '-circle';
    public $mostrar = 'hidden';
    protected $queryString = ['search','order','campo'];

    public function render()
    {
        return view('livewire.list-of-posts');
    }
}
