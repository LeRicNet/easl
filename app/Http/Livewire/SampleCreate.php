<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sample;

class SampleCreate extends Component
{
    public $sample;
    public string $primary_id;

    public bool $saveSuccess = false;

    protected $rules = [
        'sample.primary_id' => 'required',
        'sample.alternate_id' => 'optional',
    ];

    public function mount()
    {
        $this->sample = new Sample;
    }

    public function saveSample()
    {
        // Check if primary_id has been set before adding to Sample model.
        if(isset($this->primary_id)) {
            $this->sample->primary_id = $this->primary_id;
        }
        $this->sample->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.sample-create')
            ->extends('layouts.survey-instrument')
            ->section('content');
    }
}
