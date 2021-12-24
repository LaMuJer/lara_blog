<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBarLink extends Component
{
    public $link,$name,$class,$count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link="#",$name="Side Bar Link",$class="fas fa-link",$count=null)
    {
        $this->name = $name;
        $this->link = $link;
        $this->class = $class;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar-link');
    }
}
