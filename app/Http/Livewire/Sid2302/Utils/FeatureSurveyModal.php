<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;

class FeatureSurveyModal extends Component
{
    public $featureGroup;
    public $feature;
    
    public function render()
    {
        
        $this->key = $this->featureGroup . '-' . $this->feature . '-modal';
        return view('livewire.sid2302.utils.feature-survey-modal');
    }
}
