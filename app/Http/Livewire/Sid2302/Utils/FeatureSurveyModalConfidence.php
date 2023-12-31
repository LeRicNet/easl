<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;

class FeatureSurveyModalConfidence extends Component
{
    public $factorLevels = array('low', 'medium', 'high');
    public string $featureGroup;
    public string $feature;
    public string $key;
    
    public string $userQuery;
    public string $userQueryCategory;

    public function render()
    {
        $this->key = $this->featureGroup . '-' . $this->feature . '-' . $this->userQueryCategory;
        return view('livewire.sid2302.utils.feature-survey-modal-confidence');
    }
}
