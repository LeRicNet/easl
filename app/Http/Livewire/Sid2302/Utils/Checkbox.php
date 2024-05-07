<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\PatientPredictions;
use App\Models\CurrentPatient;

class Checkbox extends Component
{
    
    public $feature = 'Suprasellar';
    public $featureGroup = 'location';
    public $highlight = false;
    public $predictionDisagreement = false;
    public bool $checked = false;
    public string $key;
    public $patient = 1;
    public $featureValue;
    public $featureDBKey = "location_1";
    public $featureDBKeys;
    public $options = array('opt1', 'opt2', 'opt3');
    public $radioHeader = 'testTitle';
    public $inputType = 'checkbox';
    
    public $autocomplete = false;
    public $divKey;
    public $target_patient = 'missing';

    protected $listeners = [
        'nextPatient' => 'nextpatient',
        'previousPatient' => 'previouspatient',
        'updateFeatureValue' => 'getPrediction'
    ];

    public function nextpatient()
    {
        if ($this->patient < 50) {
            $this->patient++;
        }
    }

    public function previouspatient()
    {
        if ($this->patient > 1) {
            $this->patient--;
        }
    }
    

    public function makeKey()
    {
        $this->divKey =  $this->featureGroup . "-feature-" . $this->feature;
        $this->modalkey = str_replace(' ', '_', $this->featureGroup) . '-' . $this->featureDBKey . '-modal';
    }

    public function makeStringSafe()
    {
        $this->featureGroup = str_replace(' ', '_', $this->featureGroup);
        $this->feature = str_replace(' ', '_', $this->feature);
    }

    public function getPrediction()
    {
        if ($this->inputType == 'checkbox') {
            $patient = intval(CurrentPatient::first()->patient);
            $formattedPatient = 'ACP' . $patient;
            $featureValue = PatientPredictions::where('patient', $formattedPatient)
                ->select($this->featureDBKey)
                ->get();
            if (count($featureValue) > 0) {
                $this->featureValue = $featureValue[0][$this->featureDBKey];
//                $this->emitTo('sid2302.utils.barchart', 'testfn', ['featureValue' => $this->featureValue]);
            }
        }

    }

    public function getRadioPrediction($index)
    {
        $featureValue = PatientPredictions::where('patient', $this->patient)
            ->select($this->featureDBKeys[$index])
            ->get();

        $featureValue = $featureValue[0][$this->featureDBKeys[$index]];
        return $featureValue . "%";
    }
    
    public function compareToPrediction()
    {
        if ($this->checked and $this->predictionDisagreement)
        {
            $this->highlight = true;
        } else {
            $this->highlight = false;
        }
    }
    
    public function render()
    {
        if ($this->target_patient == 'missing') {
            $this->target_patient = intval(CurrentPatient::first()->patient);
        } elseif ($this->target_patient == 'testsim') {
            $this->target_patient = intval(CurrentPatient::first()->patient) + 1;
        }
        $this->makeStringSafe();
        $this->makeKey();
        $this->getPrediction();
        return view('livewire.sid2302.utils.checkbox');
    }
}
