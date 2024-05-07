<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;

class ComparisonButton extends Component
{
    public $is_ai_enabled;
    public $instructional = False;

    public function showcomparison()
    {
        if ($this->instructional) {
            $this->emitTo('sid2302.session.instructions', 'next_instruction_slide');
        } else {
            $this->emitTo('sid2302.mainview', 'showComparison');
        }
    }
    
    public function render()
    {
        return view('livewire.sid2302.utils.comparison-button');
    }
}
