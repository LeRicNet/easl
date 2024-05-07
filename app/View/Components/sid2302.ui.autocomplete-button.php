<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sid2302.ui.autocomplete-button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
    public boolean $is_ai_enabled;
)
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
        return view('components.sid2302.ui.autocomplete-button');
    }
}