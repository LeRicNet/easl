<?php

namespace App\View\Components\Atpc;

use Illuminate\View\Component;
use App\Models\DicomData as DD;
use Illuminate\Support\Facades\DB;

class PrimarySummaryStats extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public object $data;
    public string $message = "init";

    public string $n_patients = "0";
    public string $n_instances = "0";
    public string $n_modalities = "0";
    public string $n_protocols = "0";
    public string $n_manufacturers = "0";
    public string $n_series = "0";


    public function __construct()
    {
        $this->data = DD::all();
    }

    public function compute() {
        $this->n_instances = $this->data->count();
        $this->n_patients = DB::table('dicom_instances')->select('PatientName')->get()->unique()->count();
        $this->n_modalities = DB::table('dicom_instances')->select('modality')->get()->unique()->count();
        $this->n_protocols = DB::table('dicom_instances')->select('ProtocolName')->get()->unique()->count();
        $this->n_manufacturers = DB::table('dicom_instances')->select('Manufacturer')->get()->unique()->count();
        $this->n_series = DB::table('dicom_instances')->select('parent_series')->get()->unique()->count();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->compute();
        return view('components.atpc.primary-summary-stats');
    }
}
