<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DicomData as DD;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Http\Livewire\AtpcdbData;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;

use App\View\Components\DCM\Table as DCMTable;
use Matomo\Decompress\ZipArchive;

class DicomMenu extends Component
{

    // DEPRECATED FUNCTION - Now runs through Table.php

    use WithFileUploads;

    public $test_response = 'no test performed';
    public $dicoms = [];
    public $dicomZip;
    public $dicomDataId = 'temp_data';

    private $url = 'http://140.226.123.129:8042/instances';

    public $series_modality;
    public $series_protocol;

    public $model;

    public function mount() {
        $this->model = DD::all();
    }

    public function testUp() {
//        $comp = new DCMTable();
//        $comp->render();
        info('testUp() called');
    }

    function console_log($data)
    {
        $output = $data;
        if (is_array($output))
            $output = implode(",", $output);
        echo json_encode(htmlspecialchars("<script>console.log('Debug Objects: " . $output . "' );</script>"));
    }

    public function get_series_metadata($series)
    {
        // Initialize cURL
        $url = 'http://140.226.123.129:8042/series/' . $series;
        $ch = curl_init($url);
        // Return JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        return json_decode($response, true);
    }

    public function get_study_metadata($study)
    {
        // Initialize cURL
        $url = 'http://140.226.123.129:8042/studies/' . $study;
        $ch = curl_init($url);
        // Return JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        return json_decode($response, true);
    }

    public function save()
    {

        $dicomDataId = $this->dicomDataId;
        $path = 'public/active-users/dicom_tests/' . $dicomDataId;
        $path = Storage::path($path);

        foreach ($this->dicoms as $dicom) {

            $stored_file = Storage::put($path, $dicom);

            // Read in binary data from the file
            $contents = file_get_contents(Storage::path($stored_file));

            // Initialize curl with the URL
            $ch = curl_init($this->url);

            // Return JSON
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Set just the content type so that the server knows what type to expect when we submit the data
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/octet-stream'));

            // Tell curl we are making a post request
            curl_setopt($ch, CURLOPT_POST, true);

            // Set the content type header for the request
//            curl_setopt($ch, CURLOPT_HEADER, true);

           // Include the data in the post request
            curl_setopt($ch, CURLOPT_POSTFIELDS, $contents);

            // Execute the request
            $response = curl_exec($ch);

            // Get JSON Response
            $json = json_decode($response, true);

            // Close the handle
            curl_close($ch);


            // Get Metadata for Series
            $series_metadata = $this->get_series_metadata($json['ParentSeries']);
            // Get Metadata for Study
            $study_metadata = $this->get_study_metadata($series_metadata['ParentStudy']);


//            if ($json['Status'] != 'AlreadyStored') {
//                DB::insert('insert into dicom_instances (user_id, study_id, image, slug, path, orthancid, parent_patient, parent_series, status, modality, ProtocolName, Manufacturer, SeriesDescription, PatientID, PatientName, PatientSex, InstitutionName) values (?, ?, ?, ?,? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
//                    Auth::user()->id,
//                    $dicomDataId,
//                    $dicom,
//                    Str::slug('id=' . $dicomDataId . ';image=' . $dicom),
//                    $json['Path'],
//                    $json['ID'],
//                    $json['ParentPatient'],
//                    $json['ParentSeries'],
//                    $json['Status'],
//                    $series_metadata['MainDicomTags']['Modality'],
//                    $series_metadata['MainDicomTags']['ProtocolName'],
//                    $series_metadata['MainDicomTags']['Manufacturer'],
//                    $series_metadata['MainDicomTags']['SeriesDescription'],
//                    $study_metadata['PatientMainDicomTags']['PatientID'],
//                    $study_metadata['PatientMainDicomTags']['PatientName'],
//                    $study_metadata['PatientMainDicomTags']['PatientSex'],
//                    $study_metadata['MainDicomTags']['InstitutionName']
//                ]);
//            }
            if ($json['Status'] != 'AlreadyStored') {
                DB::table('dicom_instances')->insert([
                    'user_id' => Auth::user()->id,
                    'study_id' => $dicomDataId,
                    'image' => $dicom,
                    'slug' => Str::slug('id=' . $dicomDataId . ';image=' . $dicom),
                    'path' => $json['Path'],
                    'orthancid' => $json['ID'],
                    'parent_patient' => $json['ParentPatient'],
                    'parent_series' => $json['ParentSeries'],
                    'status' => $json['Status'],
                    'modality' => $series_metadata['MainDicomTags']['Modality'],
                    'ProtocolName' => $series_metadata['MainDicomTags']['ProtocolName'],
                    'Manufacturer' => $series_metadata['MainDicomTags']['Manufacturer'],
                    'SeriesDescription' => $series_metadata['MainDicomTags']['SeriesDescription'],
                    'PatientID' => $study_metadata['PatientMainDicomTags']['PatientID'],
                    'PatientName' => $study_metadata['PatientMainDicomTags']['PatientName'],
                    'PatientSex' => $study_metadata['PatientMainDicomTags']['PatientSex'],
                    'InstitutionName' => $study_metadata['MainDicomTags']['InstitutionName'],
                ]);
            }

        }


        $this->testUp();
    }

    public function saveZip() {

        info('dicoms:');
        info($this->dicoms);

        // debug
        $zip = new \ZipArchive;
        $res = $zip->open($this->dicomZip);
        if ($res === TRUE) {
            info('Zip file process PASS');
        } else {
            info('Zip file process FAIL');
        }

        // Save Zip File
        $dicomDataId = $this->dicomDataId;
        $path = 'public/active-users/dicom_tests/' . $dicomDataId;
        $path = Storage::path($path);
        $stored_file = Storage::put($path, $this->dicomZip);

        // Read in binary data from the file to send to Orthanc
        $contents = file_get_contents(Storage::path($stored_file));

        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/zip',
                'content' => $contents
            )
        );

        $context = stream_context_create($options);
        $response = file_get_contents($this->url, false, $context);

        info('saveZip() Response:');
        info($response);
    }

    public function render()
    {
        return view('livewire.dicom-menu');
    }
}
