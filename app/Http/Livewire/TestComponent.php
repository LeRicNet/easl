<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Livewire\WithFileUploads;

class TestComponent extends Component
{

    public $count = 0;
    public $test_response = 'no test performed';
    public $flask_path = '#';

    use WithFileUploads;

    public $dicoms = [];

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
            $dcm_zip->addFile($dicom, $dicom);
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
