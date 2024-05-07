<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ComparisonPatient;
use App\Models\GroundTruth;

class GroundTruthIndicator extends Component
{
    public $featureValue;
    public $patient;
    public $feature;
    public $chartId;
    public $invert = false;
    public $label;

    protected $listeners = [
        'refreshGroundTruthIndicator' => '$refresh'
    ];

    public function checkLabel()
    {
        if (! isset($this->label)) {
            $this->label = $this->feature;
        }
    }

    public function getFeatureValue()
    {
        $this->patient = ComparisonPatient::orderBy('updated', 'desc')->get()->first()->patient;
        $featureValue = GroundTruth::where('patient', $this->patient)
            ->where('feature', $this->feature)
            ->select('value')
            ->get()
            ->first()
            ->value;

        if ($this->invert) {
            $featureValue = 1 - $featureValue;
        }
        $this->featureValue = $featureValue;
    }

    public function render()
    {
        $this->checkLabel();
        $this->getFeatureValue();
        return view('livewire.sid2302.utils.ground-truth-indicator');
    }
}
