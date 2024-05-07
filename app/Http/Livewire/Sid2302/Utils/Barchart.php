<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\CurrentPatient;
use App\Models\PatientPredictions;

class Barchart extends Component
{
    public $featureDBKey;
    public $featureValue;
    public $chartId;
    public $divKey = 'missing';
    public $target_patient = 'missing';
    
//    protected $listeners = [
//        'updateBarchart' => 'render'
//    ];
    
    public function makeChartId()
    {
        if ($this->target_patient == 'missing') {
            $this->target_patient = intval(CurrentPatient::first()->patient);
        } elseif ($this->target_patient == 'testsim') {
            $this->target_patient = intval(CurrentPatient::first()->patient) + 1;
        }
        $this->chartId = $this->featureDBKey . '-' . $this->target_patient . '_autobar';
    }

    public function getPrediction()
    {

        $patient = intval(CurrentPatient::first()->patient);
        $formattedPatient = 'ACP' . $this->target_patient;
        $featureValue = PatientPredictions::where('patient', $formattedPatient)
            ->select($this->featureDBKey)
            ->get();
        if (count($featureValue) > 0) {
            $this->featureValue = $featureValue[0][$this->featureDBKey];
        }


    }

    public function testfn()
    {
        dump($this->featureValue);
    }

    public function render()
    {
        
        $this->makeChartId();
        $this->getPrediction();
//        $this->testfn();
        return view('livewire.sid2302.utils.barchart');
    }
}
