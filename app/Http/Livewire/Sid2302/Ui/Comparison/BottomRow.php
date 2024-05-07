<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Livewire\Component;
use App\Models\PatientKey;
use App\Models\CurrentPatient;
use App\Models\ComparisonPatient;

class BottomRow extends Component
{
    public $current_target_patient;
    public $current_comparison_patient;

    protected $listeners = [
        'refresh' => 'mount'
    ];

    public function mount()
    {
        $this->get_patients();
    }
    
    public function get_patients()
    {
        $target_patient_id = CurrentPatient::first()->patient;
        
        $comparison_patient_id = ComparisonPatient::first()->patient;
        
        $this->current_target_patient = PatientKey::where('studyIdentifier', trim($target_patient_id, 'ACP'))
            ->first()->patientName;
        
        $this->current_comparison_patient = PatientKey::where('studyIdentifier', trim($comparison_patient_id, 'ACP'))
            ->first()->patientName;
    }
    
    public function render()
    {
        return view('livewire.sid2302.ui.comparison.bottom-row');
    }
}
