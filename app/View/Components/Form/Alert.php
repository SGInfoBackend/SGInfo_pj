<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Alert extends Component
{
    // public $message;
    // public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.alert');
    }
}