<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Livewire\Component;

class Row extends Component
{
    public $feature_labels;
    public $feature_keys;
    
    public function render()
    {
        return view('livewire.sid2302.ui.comparison.row');
    }
}
