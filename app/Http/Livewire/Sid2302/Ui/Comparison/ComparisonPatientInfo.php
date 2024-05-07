<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Livewire\Component;
use App\Models\ComparisonPatient;
use App\Models\ClinicalInfo;
use App\Models\PatientKey;

class ComparisonPatientInfo extends Component
{
    public $patient_name;
    public $age;
    public $sex;
    public $height;
    public $weight;
    public $primary_symptom;
    public $secondary_symptom;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function getPatientInfo()
    {
        $current_patient = ComparisonPatient::orderBy('updated', 'desc')->get()->first()->patient;
        $this->patient_name = PatientKey::where('studyIdentifier', trim($current_patient, 'ACP'))->get()->first()->patientName;
        $this->sex = ClinicalInfo::where('patient', $current_patient)->get()->first()->sex;
        $this->age = ClinicalInfo::where('patient', $current_patient)->get()->first()->age;
        $this->height = ClinicalInfo::where('patient', $current_patient)->get()->first()->height;
        $this->weight = ClinicalInfo::where('patient', $current_patient)->get()->first()->weight;
        $this->primary_symptom = ClinicalInfo::where('patient', $current_patient)->get()->first()->primary_symptom;
        $this->secondary_symptom = ClinicalInfo::where('patient', $current_patient)->get()->first()->secondary_symptom;
    }

    public function render()
    {
        $this->getPatientInfo();
        return view('livewire.sid2302.ui.comparison.comparison-patient-info');
    }
}
