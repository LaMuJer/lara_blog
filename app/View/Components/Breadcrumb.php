<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $currentPage,$links;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($currentPage="Current Page",$links=[])
    {
        $this->currentPage = $currentPage;
        $this->links = $links;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
