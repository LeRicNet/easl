<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;

class AutocompleteButton extends Component
{
    public $is_ai_enabled;
    public $instructional = False;

    public function autocomplete()
    {
        if ($this->instructional) {
            $this->emitTo('sid2302.session.instructions', 'next_instruction_slide');
        } else {
            $this->emitTo('sid2302.mainview', 'autocomplete');
        }
    }

    public function render()
    {
        return view('livewire.sid2302.utils.autocomplete-button');
    }
}
