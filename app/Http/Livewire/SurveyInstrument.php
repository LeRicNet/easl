<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SurveyInstrument extends Component
{
    public $test_message = 'success';

    public function change()
    {
       $new_message = 'Again';
       $new_message = array($this->test_message, $new_message);
        $this->test_message = implode($new_message);
    }

    public function render()
    {
        return view('layouts.survey-instrument');
    }
}
