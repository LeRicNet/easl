<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class RStudio extends Component
{
    public $path = "http://140.226.123.129:8787";

    public function render()
    {
        return view('livewire.r-studio');
    }
}
