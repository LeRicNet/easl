<?php

namespace App\View\Components\DCM;

use Illuminate\View\Component;
use App\Models\DicomData as DD;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Table extends Component
{

    // DEPRECATED: functionality replaced by DicomInfoAjaxController

    public $dicom_entries = [];
    public $dicom_json;
    private $url = 'http://140.226.123.129:8042/';

    public $table_constructed = FALSE;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->dicom_entries = DB::table('dicom_instances')
//            ->select([
//                'PatientID', 'PatientName', 'PatientSex', 'InstitutionName',
//                'modality', 'ProtocolName', 'Manufacturer', 'parent_series'
//                ])
//            ->get();
//        $dicom_json = $this->dicom_entries->toJson(JSON_HEX_QUOT);
//        $dicom_json = json_encode($dicom_json, JSON_HEX_QUOT);
//        $this->dicom_json = $dicom_json;
    }

    public function update()
    {
        info('Table::update() called');
        $this->dicom_entries = DD::all();
    }

    public function verifyTable() {
        //
        // First, we need to get a fresh list of instances from the orthanc server through the REST API.
        //
        // Initialize curl with the URL
        $ch = curl_init($this->url . 'instances');

        // Return JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the request
        $response = curl_exec($ch);

        // Get JSON Response
        $json = json_decode($response, true);

        // Close the handle
        curl_close($ch);

        // ******
        // Next, we  query the SQL table. We expect the instances to match between the two exactly.
        // We leverage the DicomData model (as DD).
        $this->dicom_entries = DD::all();

        // Extract the instances from the dicom entries
        $sql_dicom_instances = array();
        foreach($this->dicom_entries as $dicom_entry) {
            $sql_dicom_instances[] = $dicom_entry['orthancid'];
        }

        // Check if there are differences between the two datasets
//        if (count(array_diff($json, $sql_dicom_instances)) > 0) {
//            info('Orthanc and SQL instances do not match exactly. See "app/Http/View/Components/DCM/Table.php"');
//        }

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

    private function check_value($array_key, $array) {
        if (array_key_exists($array_key, $array)) {
            return $array[$array_key];
        } else {
            return 'n/a';
        }
    }

    public function loadTable(bool $fresh) {
        // if requested, we generate a fresh copy of the dataset based on the Orthanc server.
        // NOTE: this can take some time for the page to load; it may not be necessary to generate
        //       a new copy of the dataset every time.
//        if ($fresh & !$this->table_constructed) {
            //
            // First, we need to get a fresh list of instances from the orthanc server through the REST API.
            //
            // Initialize curl with the URL
            $ch = curl_init($this->url . 'instances');

            // Return JSON
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Execute the request
            $response = curl_exec($ch);

            // Get JSON Response
            $dicom_instances = json_decode($response, true);

            // Close the handle
            curl_close($ch);

            // Clear Table
            DB::table('dicom_instances')->truncate();
            info('SQL table "dicom_instances" has been truncated.');

            // Next, we need to take the instances and build the metadata out
            foreach($dicom_instances as $dicom_instance) {
                // Initialize curl with the URL
                $ch = curl_init($this->url . 'instances/' . $dicom_instance);

                // Return JSON
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Execute the request
                $response = curl_exec($ch);

                // Get JSON Response
                $dicom_response = json_decode($response, true);

                // Close the handle
                curl_close($ch);

                // Get Metadata for Series
                $series_metadata = $this->get_series_metadata($dicom_response['ParentSeries']);
                // Get Metadata for Study
                $study_metadata = $this->get_study_metadata($series_metadata['ParentStudy']);


                // Fill Out Table
                DB::table('dicom_instances')->insert([
                    'user_id' => Auth::user()->id,
                    'study_id' => $this->check_value('StudyInstanceUID', $study_metadata['MainDicomTags']),
                    'image' => $this->check_value('SeriesInstanceUID', $series_metadata['MainDicomTags']),
                    'slug' => Str::slug('id=' . $series_metadata['ID'] . bin2hex(random_bytes(20))),
                    'path' => 'deprecated-variable',
//                    'orthancid' => $this->check_value('ID', $series_metadata),
                    'orthancid' => $dicom_instance,
                    'parent_patient' => $this->check_value('ParentPatient', $study_metadata),
                    'parent_series' => $series_metadata['ParentStudy'],
                    'status' => $this->check_value('Status', $series_metadata),
                    'modality' => $this->check_value('Modality', $series_metadata['MainDicomTags']),
                    'ProtocolName' => $this->check_value('ProtocolName', $series_metadata['MainDicomTags']),
                    'Manufacturer' => $this->check_value('Manufacturer', $series_metadata['MainDicomTags']),
                    'SeriesDescription' => $this->check_value('SeriesDescription', $series_metadata['MainDicomTags']),
                    'PatientID' => $this->check_value('PatientID', $study_metadata['PatientMainDicomTags']),
                    'PatientName' => $this->check_value('PatientName', $study_metadata['PatientMainDicomTags']),
                    'PatientSex' => $this->check_value('PatientSex', $study_metadata['PatientMainDicomTags']),
                    'InstitutionName' => $this->check_value('InstitutionName', $study_metadata['MainDicomTags']),
                ]);


            }
//        } // Else, model will return DD::all(), as specified in the __construct method

        $this->table_constructed = TRUE;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
//        $this->loadTable(FALSE);
        return view('components.d-c-m.table');
    }
}
