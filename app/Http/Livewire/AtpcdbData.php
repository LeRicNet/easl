<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\DicomMenu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\DicomData as DD;

class AtpcdbData extends Component
{
    //
    // THIS IS A DEPRECATED FILE!!
    //

    public $dicom_entries = [];
    public $test = 'pass';
    private $url = 'http://140.226.123.129:8042/instances';

    protected $listeners =  [
      'dicomAdded' => 'testFn'
    ];

    public function testFn() {
        info('*** message passed ***');
    }

    public function updateTable() {
//        $this->dicom_entries = DB::select('select * from dicom_data');
        $this->dicom_entries = DD::all();
        // TODO: VERIFY LINK BETWEEN SQL AND ORTHANC
    }

    public function verifyTable() {
        //
        // First, we need to get a fresh list of instances from the orthanc server through the REST API.
        //
        // Initialize curl with the URL
        $ch = curl_init($this->url);

        // Return JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the request
        $response = curl_exec($ch);

        // Get JSON Response
        $json = json_decode($response, true);

        Log::info($json);

        // Close the handle
        curl_close($ch);

        // ******
        // Next, we  query the SQL table. We expect the instances to match between the two exactly.
        // We leverage the DicomData model (as DD).
//        $this->dicom_entries = DD::all();



    }

    public function render()
    {
        $this->verifyTable();
        return view('livewire.atpcdb-data');
    }
}
