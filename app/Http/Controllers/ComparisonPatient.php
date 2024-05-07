<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DcmDatabase;
use DataTables;
use App\Models\ComparisonPatient as CP;

class ComparisonPatient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient = intval(trim(CP::first()->patient, "ACP"));
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
        return response()->json(["data" => $array_results], 200, options: JSON_HEX_QUOT);

    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update_comparison_patient(string $id)
    {
        $comparison_updated_at = date('Y-m-d H:i:s', time());
        if (CP::count() > 0) {
            $patient = CP::first();
            CP::where('patient', $patient->patient)->delete();
        }

        CP::insert([
            'patient' => $id,
            'updated' => $comparison_updated_at
        ]);
        
        return response()->json(["pass"], 200, options: JSON_HEX_QUOT);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
