<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DicomData;
use DataTables;
use Illuminate\Support\Facades\DB;

class DicomInfoAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // adapted from: https://www.nicesnippets.com/blog/laravel-9-ajax-crud-tutorial-using-datatable
//        if ($request->ajax()) {
            $dataset = DB::table('dicom_instances')
                ->select([
                    'PatientID', 'PatientName', 'PatientSex', 'InstitutionName',
                    'modality', 'ProtocolName', 'Manufacturer', 'parent_series', 'orthancid'
                ])
                ->get();

            return response()->json(["data" => $dataset], 200, options: JSON_HEX_QUOT);
//        }

//        return view('atpcdb');
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
    public function show($patient_name)
    {
        //
        $dataset = DB::table('dicom_instances')
            ->select([
                'PatientID', 'PatientName', 'PatientSex', 'InstitutionName',
                'modality', 'ProtocolName', 'Manufacturer', 'parent_series', 'orthancid'
            ])
            ->where('PatientName', '=', $patient_name)
            ->get();

        return response()->json(["data" => $dataset], 200, options: JSON_HEX_QUOT);
    }
    
    public function show_series($patient_name)
    {

        $dataset = DB::table('parentseries')
            ->select([
                'PatientName', 'parent_series', 'PatientSex', 'modality', 'SeriesDescription', 'count'
            ])
            ->where('PatientName', '=', $patient_name)
            ->get();
//
        return response()->json(["data" => $dataset], 200, options: JSON_HEX_QUOT);
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
