<?php

namespace App\Http\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectDashboard extends Component
{

    public string $recorded_project_title = 'untitled project';
    public $working_project_title;
    public $project;
    public $is_project_loaded = False;

    public $project_library;
    public $project_library_size;

    public $active_project;

    public $test_var='pass';

    protected $rules = [
        'project.title' => 'optional',
        'project.data_table_id' => 'optional',
    ];

    public function mount()
    {
        $this->project = new Project;
    }

    public function launch()
    {
//        $this->active_project = DB::select('select title from project where id = 1')-value('title');
        $this->test_var = 'launchProject() called';
    }

    private function resetDB()
    {
        $this->project_library_size = DB::table('project')->select('*')->count();
        $this->project_library = DB::table('project')->get();
    }

    public function save()
    {
        $this->recorded_project_title = $this->working_project_title;
        $this->project->title = $this->working_project_title;
        $this->project->data_table_id = 1;

        $this->is_project_loaded = True;


        $this->project->save();
        $this->resetDB();
    }

    public function render()
    {
        $this->resetDB();
        return view('livewire.project-dashboard');
    }
}
