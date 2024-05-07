<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class RStudio extends Component
{
    public $path = "http://140.226.123.129:8787";
    public $active_project;
    public $working_directory;

    public $temp_path;

    protected $listeners = ['projectAttached' => 'getActiveProject'];

    private function checkDirectory($dir)
    {
        if (!Storage::exists($dir))
        {
            Storage::makeDirectory($dir);
        }
    }

    public function getActiveProject()
    {
        $this->active_project = DB::table('project')
            ->where('is_active', 1)
            ->value('title');


        $this->temp_path = storage_path('shiny-dashboards');
        $user_id = Auth::id();
        $working_path = $this->temp_path;
//        $working_path = $this->temp_path . "/user-" . $user_id;
//        $this->checkDirectory($working_path);
////        Storage::put($working_path . "/rstudio-test.txt", 'pass test');
        $this->working_directory = scandir($this->temp_path);
        $this->working_directory = array_diff($this->working_directory, array('..', '.'));

    }

    public function render()
    {
        $this->getActiveProject();

        return view('livewire.r-studio');
    }
}
