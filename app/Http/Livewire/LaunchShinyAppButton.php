<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LaunchShinyAppButton extends Component
{
    public $fn_out = 'before';

    public function launch()
    {
        $this->fn_out = shell_exec('docker ps -a');
    }

    public function render()
    {
        return view('livewire.launch-shiny-app-button');
    }
}
