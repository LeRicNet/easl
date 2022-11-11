<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Process\Process;
use Livewire\WithFileUploads;

class TestComponent extends Component
{

    use WithFileUploads;

    public $photo;
    public $test_response = 'no test performed';
    public $visibility = 'unknown';
    public $files;
    public $dicoms = [];
    public $dicomDataId = 'temp_data';
    public $data_dirs = [];

    public function save()
    {

        $dicomDataId = $this->dicomDataId;
        $path = 'public/active-users/dicom_tests/' . $dicomDataId;
        $path = Storage::path($path);

        $this->test_response = 'file saved at ' . $path;

        foreach ($this->dicoms as $dicom) {
            Storage::put($path, $dicom);
        }

        $this->update_table($dicomDataId);
//        $this->files = implode(',', Storage::files($path));
//

    }

    public function update_table($datasetId)
    {
        array_push($this->data_dirs, $datasetId);
//        $this->data_dirs = Storage::directories($path);
    }

    public $count = 0;
    public $flask_path = '#';



    public function increment()
    {
        $this->count++;
        $python_script = Storage::path('framework/python/test.py');
        $python_command = 'xcxlab_jupyterlab-GPU:/root/.ipython/profile_default/startup/backend/orthanc-api.py ';
        $output = shell_exec($python_command);
        $this->test_response = $output;
    }

    public function attach()
    {
        // Attach a folder of dicom images to the current orthanc server
        // this can be done through the simple cURL API provided by the orthanc server
        // See: https://book.orthanc-server.com/users/rest.html#id5
        //
        // File upload functionality adapted from: https://laravel-livewire.com/docs/2.x/file-uploads
        // cURL code adapted from: https://stackoverflow.com/questions/48279382/curl-request-in-laravel

//        $this->validate([
//
//        ])

        // Build zip archive
        $dcm_zip = new \ZipArchive;
        $zip_name = 'temp.zip';
        $dcm_zip->open($zip_name, \ZipArchive::CREATE);
        foreach ($this->dicoms as $dicom) {
            $dicom->store('dicoms');
//            if (Input::file($dicom))
//            {
//                $this->test_response='passed test';
//            }
            // This will store the dicoms in a non-public way.
            // However, it does not currently write to a permanent disk.
        }
        $dcm_zip->close();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://140.226.123.129:8042/instances');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('data-binary'=>'@' . $zip_name)));
        $output = curl_exec($ch);
        curl_close($ch);

        $this->test_response = Route::resource('orthanc', 'OrthancController', array('only' => array('index')));

        // TODO: encode URL as a variable
//        curl_setopt($ch, CURLOPT_URL, 'http://140.226.123.129:8042/patients/0d413cc2-5060ceb7-fd4329e9-322c2e51-e75f9e51');
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
//        $results = curl_exec($ch);

//        curl_setopt($ch, CURLOPT_URL, 'http://140.226.123.129:8042/patients');
//        // SSL important
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        // This will execute the cURL call and return a JSON array with the results.
//        $output = curl_exec($ch);



//        $this->test_response = implode("\n", json_decode($output));

    }

    public function view()
    {
        $this->flask_path = 'http://140.226.123.129:5000/abc/cde';
    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
