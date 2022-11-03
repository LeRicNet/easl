<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Http\Controllers\DataUpload;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\NullOutput;

class Datadashboard extends Component
{

    public $count = 0;

    public function upload()
    {
        echo '<script>console.log("Uploading File...")</script>';
    }

    public function increment()
    {
        $this->count++;
    }

    public function view()
    {
        $this->count++;
        echo '<script>console.log("view function called")</script>';
    }

    public function render()
    {
        Log::debug('test');
        echo '<script>console.log("Your stuff here")</script>';
        return view('livewire.datadashboard');
    }

//    public function view_dicom_dataset()
//    {
////        $python_script = Storage::path('framework/python/test.py');
////        echo $python_script;
////        $python_command = escapeshellcmd($$python_script);
////        $output = shell_exec($python_command);
////        $this->test_response = 'function called';
//    }
}
