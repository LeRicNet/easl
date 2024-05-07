<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonServerController extends Controller
{


    /**
     * Display a preview image the selected DICOM instance.
     *
     * @param string $instance
     * @return \Illuminate\Http\Response
     */
    public function preview($instance)
    {
        // Algorithm:
        //    - get instance id (orthancid) from the active row in dcm_table
        //    - send to python server (i.e., EASL flask; port 5000) as HTTP request
        //    - extract image from orthanc using pydicom on EASL flask.
        //    - serve image using basic hosting functionality
        //    - display on dashboard as iframe.
        info('The current selected instance is: ' . $instance);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
