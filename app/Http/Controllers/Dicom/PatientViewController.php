<?php

namespace App\Http\Controllers\Dicom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CurrentPatient;
use App\Models\LatentPatientSimilarity;

class PatientViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $formattedPatient = "ACP" . CurrentPatient::first()->patient;
        $dataset = LatentPatientSimilarity::where("from_patient", $formattedPatient)
            ->orderBy('dist_l1', 'desc')->limit(5)->get();

        $array_results = array();
        foreach($dataset->all() as $k => $v) {
            $array_results[$k] = [
                'from_patient' => $v->from_patient,
                'to_patient' => $v->to_patient,
                'dist_l1' => $v->dist_l1
            ];
        }
//
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
