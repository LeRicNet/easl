<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;

use App\Models\CurrentPatient;
use App\Models\ClinicalInfo;
use App\Models\PatientKey;
use App\Models\LatentPatientSimilarity;
use App\Models\ComparisonPatient;

class Table2 extends LivewireDatatable
{

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function builder()
    {
        $this->perPage = 5;
        $formattedPatient = "ACP" . CurrentPatient::first()->patient;
        $dataset = LatentPatientSimilarity::where("from_patient", $formattedPatient)->orderBy('dist_l1', 'desc');
        return $dataset;
    }

    public function columns()
    {
        return [
            Column::callback(['to_patient'], function($id) {
                $formattedID = trim($id, 'ACP');
                $patient_name = PatientKey::where('studyIdentifier', $formattedID)->get()->first();
                return $patient_name->patientName;
            }, $callbackName=['to_patient_name'])->label('Comparison Patient')->unsortable(),
            Column::callback(['to_patient'], function($patient) {
                $sex = ClinicalInfo::where('patient', $patient)->get()->first();
                return mb_substr($sex->sex, 0, 1);
            }, $callbackName=['to_patient_sex'])->label('sex')->unsortable(),
            Column::callback(['to_patient'], function($patient) {
                $age = ClinicalInfo::where('patient', $patient)->get()->first();
                return $age->age;
            }, $callbackName=['to_patient_age'])->label('age at dx (yrs)')->unsortable(),
            Column::callback(['to_patient'], function($patient) {
                $primary_symptom = ClinicalInfo::where('patient', $patient)->get()->first();
                return $primary_symptom->primary_symptom;
            }, $callbackName=['to_patient_primary_symptom'])->label('primary symptom')->unsortable(),
            Column::callback(['to_patient'], function($patient) {
                return view('sid2302.ui.comparison-button', ['patient' => $patient]);
            })->unsortable()
        ];
    }

    public function cellClasses($row, $column)
    {
        return 'text-left whitespace-no-wrap text-xs';
    }


}