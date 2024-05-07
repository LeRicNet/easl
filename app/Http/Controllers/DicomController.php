<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DicomController extends Controller
{
    /**
     * Show the table of available DICOM instances
     */
    public function show()
    {
        info('DicomController:show called');
        return view('components.d-c-m.table');
    }
}
