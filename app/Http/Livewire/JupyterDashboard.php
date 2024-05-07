<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JupyterDashboard extends Component
{

    public $path = "http://140.226.123.129:8888";

    public function render()
    {
        return view('livewire.jupyter-dashboard');
    }
}
