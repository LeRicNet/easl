<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ComparisonPatient;
use App\Models\PatientKey;
use App\Models\DcmDatabase;

class ComparisonPatientImageTable extends Component
{

    public $current_patient;
    public $dicom_data;
    public $uniq_studies;
    public $show_barco_options = False;
    public $selected;

    protected $listeners = [
        'refresh' => 'mount'
    ];

    public function mount()
    {
        $this->current_patient = trim(ComparisonPatient::first()->patient, 'ACP');
//        $this->current_patient =  PatientKey::where('studyIdentifier', $studyIdentifier)
//            ->first()->patient;
        $this->uniq_studies = DcmDatabase::where('patient', $this->current_patient)
            ->select('study_uid')->distinct()->get()->toArray();
    }

    public function showBarcoOptions($study_uid)
    {
        $this->selected = $study_uid;
        $this->show_barco_options = ! $this->show_barco_options;
    }

    public function getCount($study_uid)
    {
        $count = DcmDatabase::where('patient', $this->current_patient)
            ->where('study_uid', $study_uid)
            ->count();
        return $count;
    }

    public function getModality($study_uid)
    {
        $modalities = DcmDatabase::where('patient', $this->current_patient)
            ->where('study_uid', $study_uid)
            ->select('modality')
            ->distinct()
            ->get()
            ->toArray();

        if (count($modalities) > 1) {
            $modality_str = '';
            foreach ($modalities as $modality) {
                if (strlen($modality_str) == 0) {
                    $modality_str = $modality['modality'];
                } else {
                    $modality_str = $modality_str . '/' . $modality['modality'];
                }
            }
        } else {
            $modality_str = $modalities[0]['modality'];
        }
        return $modality_str;
    }

    public function getStudyDescription($study_uid)
    {
        $study_descriptions = DcmDatabase::where('patient', $this->current_patient)
            ->where('study_uid', $study_uid)
            ->select('study_description')
            ->distinct()
            ->get()
            ->toArray();

        if (count($study_descriptions) > 1) {
            $study_description_str = '';
            foreach ($study_descriptions as $study_description) {
                if (strlen($study_description_str) == 0) {
                    $study_description_str = $study_description['study_description'];
                } else {
                    $study_description_str = $study_description_str . '/' . $study_description['study_description'];
                }
            }
        } else {
            $study_description_str = $study_descriptions[0]['study_description'];
        }
        return $study_description_str;
    }

    public function render()
    {
        return view('livewire.sid2302.utils.comparison-patient-image-table');
    }
}
