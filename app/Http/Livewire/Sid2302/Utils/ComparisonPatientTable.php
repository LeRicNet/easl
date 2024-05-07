<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\LatentPatientSimilarity;
use App\Models\CurrentPatient;
use App\Models\ClinicalInfo;
use App\Models\PatientKey;
use App\Models\ComparisonPatient;
use App\Models\TestPatients;

date_default_timezone_set('America/Denver');

class ComparisonPatientTable extends Component
{
    
    public $comparison_patients;
    public $selected;
    
    public function mount()
    {
        $formattedPatient = CurrentPatient::first()->patient;
        $this->comparison_patients = LatentPatientSimilarity::where("from_patient", $formattedPatient)
            ->whereNotIn('to_patient', TestPatients::pluck('patient')->all())
            ->orderBy('dist_l1', 'desc')
            ->limit(5)
            ->get()
            ->toArray();

        $selected_id = LatentPatientSimilarity::where("from_patient", $formattedPatient)
            ->whereNotIn('to_patient', TestPatients::pluck('patient')->all())
            ->orderBy('dist_l1', 'desc')
            ->first()
            ->to_patient;
        $this->select($selected_id);
    }

    public function select($id)
    {
        $this->selected = $id;
        $comparison_updated_at = date('Y-m-d H:i:s', time());
        if (ComparisonPatient::count() > 0) {
            $current_patient = ComparisonPatient::orderBy('updated', 'desc')->get()->first()->patient;
            ComparisonPatient::where('patient', $current_patient)->delete();
        }

        ComparisonPatient::insert([
            'patient' => $id,
            'updated' => $comparison_updated_at
        ]);

        $this->emitTo('sid2302.ui.comparison.comparison-patient-info', 'refresh');
        $this->emitTo('sid2302.utils.comparison-patient-image-table', 'refresh');
        $this->emitTo('sid2302.ui.comparison.bottom-row', 'refresh');
        $this->emitTo('sid2302.utils.barchart2', 'refreshBarchart');
    }

    public function getPatientName($id)
    {
        $formattedID = trim($id, 'ACP');
        $patient_name = PatientKey::where('studyIdentifier', $formattedID)->get()->first();
        return $patient_name->patientName;
    }

    public function getPatientSex($id)
    {
        $sex = ClinicalInfo::where('patient', $id)->get()->first();
        return mb_substr($sex->sex, 0, 1);
    }

    public function getPatientAge($id)
    {
        $age = ClinicalInfo::where('patient', $id)->get()->first();
        return $age->age;
    }

    public function getPatientPrimarySymptom($id)
    {
        $primary_symptom = ClinicalInfo::where('patient', $id)->get()->first();
        return $primary_symptom->primary_symptom;
    }

    public function render()
    {
        return view('livewire.sid2302.utils.comparison-patient-table');
    }
}
