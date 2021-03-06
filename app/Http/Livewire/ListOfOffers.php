<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Salary;
use App\Models\Schedule;
use App\Models\State;
use Livewire\WithPagination;

class ListOfOffers extends Component
{
    use WithPagination;
    public $search = '';
    public $schedule ='';
    public $state ='';
    public $position ='';
    public $max_salary =100000000;
    public $paginate = 5;
    public $campo = null;
    public $order = null;
    public $showJob='hidden';
    public $idPost = null;

    public $icon  = '-circle';
    public $mostrar = 'hidden';

    protected $queryString = ['search', 'order', 'campo','schedule'];


    public function render()
    {
        $salaries = Salary::all();
        $states = State::all()->pluck('name');
        $schedules = Schedule::all()->pluck('name');

        $posts = Post::termino($this->search)
        ->state($this->state)
        ->salary($this->max_salary)
        ->schedule($this->schedule);

        if ($this->campo && $this->order) {
            $posts = $posts->orderBy($this->campo, $this->order);
        }

        $posts = $posts->orderBy('created_at','desc')->paginate($this->paginate);
        return view(
            'livewire.list-of-offers',
            [
                'salaries'=>$salaries,
                'states'=>$states,
                'schedules'=>$schedules,
                'posts'=>$posts
            ]
        )->layout('layouts.bpp',[
            'pageClass' =>'job-header',
            'classTitulo' =>'',
            'classSubTitulo' =>'',
            'pageTitulo' =>'Prueba',
            'pageSubTitulo' =>'subtitulo'
        ]);
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

    public function showJob(Post $post)
    {
        $this->emit('showJob',$post);
    }

}
