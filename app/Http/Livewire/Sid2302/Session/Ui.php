<?php

namespace App\Http\Livewire\Sid2302\Session;

use Livewire\Component;
use App\Models\CurrentPatient;
use App\Models\TestPatients;
use App\Models\AIEnabled;

class Ui extends Component
{

    public $current_patient;

    public function mount()
    {
        $this->setPatient();
        $this->checkIfAIenabled();
    }

    public function setPatient()
    {
        if (CurrentPatient::count() > 0) {
            $patient = CurrentPatient::first();
            CurrentPatient::where('patient', $patient->patient)->delete();
        }

        if (! isset($this->current_patient)) {
            $this->current_patient = 2;
        }

        CurrentPatient::insert([
            'patient' => $this->current_patient,
            'updated' => date('Y-m-d H:i:s', time())
        ]);

    }

    public function checkIfAIenabled()
    {
        $ai_status_updated_at = date('Y-m-d H:i:s', time());

        $this->current_patient = 'ACP' . CurrentPatient::first()->patient;
        $instance = TestPatients::where('patient', $this->current_patient)
            ->select('ai_enabled');

        if ($instance->count() > 0) {
            $ai_enabled = $instance->first()->ai_enabled;
        } else {
            $ai_enabled = false;
        }

        AIEnabled::truncate();
        AIEnabled::insert([
            'is_ai_enabled' => boolval($ai_enabled),
            'updated' => $ai_status_updated_at
        ]);
    }

    public function render()
    {
        $this->setPatient();
        return view('livewire.sid2302.session.ui');
    }
}
