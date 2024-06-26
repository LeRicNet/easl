<?php

namespace App\Http\Livewire;

use App\Models\DicomData as DD;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class DicomData extends Component
{

    use WithFileUploads;

    public $photo;
    public $test_response = 'no test performed';
    public $visibility = 'unknown';
    public $files;
    public $file_path = '';
    public $dicoms = [];
    public $dicomDataId = 'temp_data';
    public $data_dirs = [];
    public $test_file = '';

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

    }

    public function update_table($datasetId)
    {
        array_push($this->data_dirs, $datasetId);
//        $this->data_dirs = Storage::directories($path);
    }

    public function viewDataset($data_dir)
    {
        $path = 'public/active-users/dicom_tests/' . $data_dir;
        $path = Storage::path($path);
        $file_array = Storage::allFiles($path);
        $this->files = count($file_array);
        $this->test_file = Storage::path($file_array[1]);


        $content_type = mime_content_type($this->test_file);

        $headers = array(
            "Content-Type: $content_type", // or whatever you want
        );

        $filesize = filesize($this->test_file);
        $stream = fopen($this->test_file, 'r');

        $curl_opts = array(
            CURLOPT_URL => 'http://140.226.123.129:8042/instances',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PUT => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_INFILE => $stream,
            CURLOPT_INFILESIZE => $filesize,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_opts);

        $response = curl_exec($curl);

        fclose($stream);

        $this->test_file = $response;

//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, 'http://140.226.123.129:8042/instances');
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->test_file);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/binary'));
//
//        curl_exec($ch);
//
//        $info = curl_getinfo($ch);
//
//        $this->test_file = $info['request_header'];

//        // POST files to Orthanc
//        foreach ($file_array as $file) {
//            $this->test_response = 'calling cURL on ' . $file;
//            $ch = curl_init();
//            curl_setopt($ch, CURLOPT_URL, 'http://140.226.123.129:8042/instances');
//            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('data-binary'=>'@' . $file)));
//            $output = curl_exec($ch);
//            curl_close($ch);
//        }
////        $this->files = Storage::get($path);
        $this->test_response = 'called viewDataset(data_dir = ' . $data_dir . ')';
        $this->file_path = $path;

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

//        $path = 'public/active-users/dicom_tests/';
//        $path = scandir(Storage::path($path));
//        $path = array_diff($path, array('..', '.'));
//        $this->data_dirs = $path;

        return view('livewire.test-component');
    }
}
