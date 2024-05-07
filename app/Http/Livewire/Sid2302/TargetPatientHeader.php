<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;
use App\Models\PatientKey;
use App\Models\CurrentPatient;

class TargetPatientHeader extends Component
{
//    public int $patient = 1;
    public string $patientName;
    public string $patientMRN = "31413891";
    public string $patient;
    
    protected $listeners = [
        'nextPatient' => 'nextpatient',
        'previousPatient' => 'previouspatient',
        'refreshHeader' => '$refresh'
    ];

    public function nextpatient()
    {
        if ($this->patient < 50) {
            $this->patient++;
        }
    }

    public function previouspatient()
    {
        if ($this->patient > 1) {
            $this->patient--;
        }
    }

    public function getPatientName()
    {
        $patient = intval(trim(CurrentPatient::first()->patient, 'ACP'));
        $patientNameJSON = PatientKey::where('studyIdentifier', $patient)
            ->select('patientName')
            ->get();

        $this->patientName = $patientNameJSON[0]['patientName'];
        $this->emitTo('sid2302.sidebar', 'currentPatient');
    }
    
    public function render()
    {
        $this->getPatientName();
        return view('livewire.sid2302.target-patient-header');
    }
}
