<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DcmDatabase;
use DataTables;
use App\Models\CurrentPatient;

class PatientImageTableController extends Controller
{
    public $current_patient;

    public function index(Request $request)
    {
        $patient = intval(CurrentPatient::first()->patient);
        if ($patient != $this->current_patient) {
            $studies = DcmDatabase::where('patient', $patient)
                ->select('study_id')
                ->distinct()
                ->get()
                ->all();

            $modalities = DcmDatabase::where('patient', $patient)
                ->where('study_id', $studies[0]['study_id'])
                ->select('modality')
                ->distinct()
                ->get();

            $acquisitionDates = DcmDatabase::where('patient', $patient)
                ->where('study_id', $studies[0]['study_id'])
                ->select('acquiredOn')
                ->distinct()
                ->get();

            $array_results = array(
                'acquiredOn' => $acquisitionDates[0]['acquiredOn'],
                'modality' => $modalities[0]['modality']
            );

            $this->current_patient = $patient;
            return response()->json(["data" => [$array_results]], 200, options: JSON_HEX_QUOT);
        }
    }
}
