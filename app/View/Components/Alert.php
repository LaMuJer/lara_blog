<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $color,$mark,$myName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color="primary",$mark=0,$href="abc")
    {
        $this->color = $color;
        $this->mark = $mark;
        $this->myName = $href;
    }

    public function checkResult(){
        if($this->mark >= 40){
            return "aung tal";
        }
        return "kya tal";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
