<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ComparisonPatient;
use App\Models\CurrentPatient;
use App\Models\PatientPredictions2;

class Barchart2 extends Component
{

    public $mode;
    public $patient;
    public $feature;
    public $featureValue = 0;
    public $divID;

    protected $listeners = [
        'refreshBarchart' => '$refresh'
    ];

    public function test()
    {
        dump($this->patient);
    }

    public function getFeatureValue()
    {
        if ($this->mode == 'target') {
            $this->patient = CurrentPatient::orderBy('updated', 'desc')->get()->first()->patient;
//            $this->patient = 'ACP' . $patient;
        } else if ($this->mode == 'comparison') {
            $patient = ComparisonPatient::orderBy('updated', 'desc')->get()->first()->patient;
            $this->patient = $patient;
        }
        
        $this->featureValue = PatientPredictions2::where('patient', $this->patient)
            ->where('feature', $this->feature)
            ->get()
            ->first()
            ->value;
    }
    
    public function render()
    {
        $this->getFeatureValue();
        return view('livewire.sid2302.utils.barchart2');
    }
}
