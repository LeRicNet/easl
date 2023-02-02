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
    public $working_project_id;
    public $working_project_abstract;

    public $project_created_at;
    public $project_updated_at;

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
    public function attach($id)
    {
        $select_project = DB::table('project')->find($id);
        $this->working_project_id = $id;
        $this->test_var = $select_project->title;
        $this->working_project_title = $select_project->title;
        $this->project_created_at = $select_project->created_at;
        $this->project_updated_at = $select_project->updated_at;
        $this->working_project_abstract = $select_project->project_abstract;

        $this->is_project_loaded = True;
            // DB::select('select title from project where id = 1').value('title');
    }

    private function resetDB()
    {
        $this->project_library_size = DB::table('project')->select('*')->count();
        $this->project_library = DB::table('project')->get();
    }

    public function save()
    {
        if (!empty($this->working_project_id)) {

            DB::table('project')
                ->where('id', $this->working_project_id)
                ->update(
                    [
                        'updated_at' => date('Y-m-d H:i:s'),
                        'title' => $this->working_project_title,
                        'project_abstract' => $this->working_project_abstract
                    ]
            );
        } else {
            $this->recorded_project_title = $this->working_project_title;
            $this->project->title = $this->working_project_title;
            $this->project->data_table_id = 1;
            $this->project->project_abstract = $this->working_project_abstract;

            $this->project->save();
        }

        $this->is_project_loaded = True;
        $this->resetDB();
    }

    public function render()
    {
        $this->resetDB();
        return view('livewire.project-dashboard');
    }
}
