<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DcmDatabase;
use DataTables;
use App\Models\CurrentPatient;
use App\Models\ComparePatient;

class PatientImageTableController extends Controller
{
    public $current_patient;

    public function index(Request $request)
    {
        $patient = intval(CurrentPatient::first()->patient);
        if ($patient != $this->current_patient) {

            $selected_studies = DcmDatabase::where('patient', $patient)->select('study_uid');
            $studies = DcmDatabase::where('patient', $patient)
                ->whereIn('study_uid', $selected_studies)
                ->whereIn('modality', ['CT', 'MR']);
            $selected_studies = $studies->select('study_uid');

            $modality = $studies->select('modality')->distinct()->get()->values()->all();
            $modality = array_map(fn($e) => $e['modality'], $modality);

            $study_description = $studies->select('study_description')->distinct()->get()->values()->all();
            $study_description = array_map(fn($e) => $e['study_description'], $study_description);

            $array_results = array();
            foreach ($selected_studies->distinct()->get()->all() as $k => $v) {

                $n_images = $studies->where('study_uid', $v['study_uid'])->count();
                $array_results[$k] = [
                    'modality' => $modality[$k],
                    'study_description' => $study_description[$k]
                ];
            }
            $this->current_patient = $patient;
            return response()->json(["data" => $array_results], 200, options: JSON_HEX_QUOT);
        }
    }
}