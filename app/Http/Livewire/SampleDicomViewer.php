<?php

namespace App\Http\Livewire;

use App\Models\DicomData as DD;
use Livewire\Component;
use Livewire\WithFileUploads;

class SampleDicomViewer extends Component
{
    use WithFileUploads;

    public $saveSuccess = false;
    public $dicomDataset;
    public $files = [];

    protected $rules = [
        'dicomDataset.study_id' => 'required|min:3',
        'dicomDataset.files' => 'required|array',
    ];

    public function mount()
    {
        $this->dicomDataset = new DD;
    }

    public function uploadDataset()
    {
        $this->dicomDataset->user_id = 1;
        $this->validate([
            'files.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->files as $file) {
            $file->store('default');
        }

        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.dicom-data')
            ->extends('layouts.survey-instrument')
            ->section('content');
    }
}
