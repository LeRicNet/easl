<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;

class FeatureForm extends Component
{
    public $autocomplete = false;
    
    public function render()
    {
        return view('livewire.sid2302.feature-form');
    }
}
