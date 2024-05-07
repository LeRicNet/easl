<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sid2302.ui.comparison.CompareButton extends Component
{
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
        return view('components.sid2302.ui.comparison.-compare-button');
    }
}
