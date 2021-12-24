<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardFrame extends Component
{
    public $title,$rightMenuText,$rightMenuLink;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title="Cart Title",$rightMenuText=null,$rightMenuLink=null)
    {
        $this->title = $title;
        $this->rightMenuText = $rightMenuText;
        $this->rightMenuLink = $rightMenuLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-frame');
    }
}
