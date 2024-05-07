<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Livewire\Component;
use App\Models\ComparisonPatient;

class CompareButton extends Component
{
    public $patient;

    public function update()
    {
        $comparison_updated_at = date('Y-m-d H:i:s', time());
        
        if (ComparisonPatient::count() > 0) {
            $current_patient = ComparisonPatient::orderBy('updated', 'desc')->get()->first()->patient;
            ComparisonPatient::where('patient', $current_patient)->delete();
        }

        ComparisonPatient::insert([
            'patient' => $this->patient,
            'updated' => $comparison_updated_at
        ]);

        $this->emitTo('sid2302.ui.comparison.comparison-patient-info', 'refresh');
        $this->emitTo('sid2302.ui.comparison.comparison-patient-image-table2', 'refresh');
        $this->emitTo('sid2302.utils.barchart2', 'refreshBarchart');
        $this->emitTo('sid2302.utils.ground-truth-indicator', 'refreshGroundTruthIndicator');
    }

    public function render()
    {
        return view('livewire.sid2302.ui.comparison.compare-button');
    }
}
