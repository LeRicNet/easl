<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Http\Controllers\DataUpload;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\NullOutput;

class Datadashboard extends Component
{

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
}
