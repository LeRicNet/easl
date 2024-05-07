<?php

namespace App\Http\Livewire\Sid2302\Ui;

use Livewire\Component;
use App\Models\PatientKey;
use App\Models\CurrentPatient;

class AutocompleteView extends Component
{

    public $current_target_patient;
    public $current_comparison_patient = 'null';

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function get_patient()
    {
        $target_patient_id = trim(CurrentPatient::first()->patient, 'ACP');

        $this->current_target_patient = PatientKey::where('studyIdentifier', $target_patient_id)
            ->first()->patientName;
    }

    public function render()
    {
        $this->get_patient();
        return view('livewire.sid2302.ui.autocomplete-view');
    }
}
