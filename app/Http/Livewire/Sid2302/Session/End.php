<?php

namespace App\Http\Livewire\Sid2302\Session;

use Livewire\Component;

class End extends Component
{
    public function restart_session()
    {
        $this->emitTo('sid2302.session', 'restart_session');
    }

    public function render()
    {
        return view('livewire.sid2302.session.end');
    }
}
