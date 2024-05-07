<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Livewire\Component;

class TumorType extends Component
{
    public $show_comparison = false;

    public function render()
    {
        return view('livewire.sid2302.ui.comparison.tumor-type');
    }
}
