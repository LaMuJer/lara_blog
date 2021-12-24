<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VenoBox extends Component
{
    public $small,$big,$gall;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($small,$big=null,$gall=null)
    {
        $this->small = $small;
        $this->big = $big;
        $this->gall = $gall;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.veno-box');
    }
}
