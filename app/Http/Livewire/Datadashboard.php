<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Http\Controllers\DataUpload;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\NullOutput;

class Datadashboard extends Component
{

    public $test_response = 'No test performed';

    public function render()
    {
        Log::debug('test');
        echo '<script>console.log("Your stuff here")</script>';
        return view('livewire.datadashboard');
    }

    public function upload()
    {
        echo '<script>console.log("Uploading File...")</script>';
    }

    public function view_dicom_dataset()
    {
        $python_script = Storage::path('framework/python/test.py');
        $python_command = escapeshellcmd($$python_script);
        $output = shell_exec($python_command);
        $this->test_response = $output;
    }
}
