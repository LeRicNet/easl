<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sample as BaseSample;

class Sample extends Component
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
        $this->sample = new BaseSample;
    }

    public function saveSample()
    {
        // Check if primary_id has been set before adding to Sample model.
        if(isset($this->primary_id)) {
            $this->sample->primary_id = $this->primary_id;
        }
        $this->sample->save();
        $this->saveSuccess = true;

        return redirect()->to("/sample/create/");
    }

    public function render()
    {
        return view('livewire.sample');
    }
}
