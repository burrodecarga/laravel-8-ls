<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BppLayout extends Component
{
    public $pageClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageClass="")
    {
       $this->pageClass = $pageClass;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('layouts.bpp');
    }
}
