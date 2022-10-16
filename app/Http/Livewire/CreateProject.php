<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class CreateProject extends Component
{
    public $project;
    public string $project_title = 'test_project_alpha';
    public $saveSuccess = false;
    public $data_table_id = 'dti_001';

    protected $rules = [
      'project.title' => 'optional',
      'project.data_table_id' => 'optional',
    ];

    public function mount()
    {
        $this->project = new Project;
    }

    public function saveProject()
    {
        $this->saveSuccess = true;
        $this->project->title = $this->project_title;
        $this->project->data_table_id = $this->data_table_id;
        $this->project->model_table_id = $this->data_table_id;
//        $this->project->data_table_id = 'test data table';
        $this->project->artifacts_table_id = $this->data_table_id;
        $this->project->experiments_table_id = $this->data_table_id;
        $this->project->save();
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
