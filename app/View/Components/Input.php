<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $margin,$name,$form,$class,$label,$type,$value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($margin="mb-3",$name=null,$form=null,$class=null,$label='Input Label',$type='text',$value=null)
    {
        $this->margin = $margin;
        $this->name = $name;
        $this->form = $form;
        $this->class = $class;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
