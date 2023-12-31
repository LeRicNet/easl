<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene;
use App\Models\CurrentPatient;
use App\Models\PatientKey;

class Sidebar extends Component
{

    public $current_patient;
    
    protected $listeners = [
        'currentPatient' => 'updateCurrentPatient'
    ];
    
    public function nextpatient()
    {
        $this->emitTo('sid2302.session', 'getNextPatient');
//        $this->emitTo('sid2302.target-patient-header', 'nextPatient');
//        $this->emitTo('sid2302.checkbox', 'nextPatient');
//        $this->emitTo('sid2302.patient-image-table', 'nextPatient');
    }
    
    public function previouspatient()
    {
//        $this->emitTo('sid2302.target-patient-header', 'previousPatient');
//        $this->emitTo('sid2302.checkbox', 'previousPatient');
//        $this->emitTo('sid2302.patient-image-table', 'previousPatient');
    }
    
    public function updateCurrentPatient()
    {
        $patient = intval(CurrentPatient::first()->patient);
        $patientNameJSON = PatientKey::where('patient', $patient)
            ->select('patientName')
            ->get();

        $patientName = $patientNameJSON[0]['patientName'];
        $this->current_patient = $patientName;
    }

    public function getPatientName()
    {
        
        $this->emitTo('sid2302.sidebar', 'currentPatient', $this->patientName);
    }
    
    public function showcomparison()
    {
        $this->emitTo('sid2302.mainview', 'showComparison');
    }
    
    public function autocomplete()
    {
        $this->emitTo('sid2302.mainview', 'autocomplete');
    }
    
    public function nextscene()
    {
        date_default_timezone_set('America/Denver');
        $current_session = Scene::first()->getAttributes()['sessionID'];
        $session_completed_at = date('Y-m-d H:i:s', time());

        Scene::insert([
            'sessionID' => $current_session,
            'scene' => 'trial_1',
            'completed' => $session_completed_at
        ]);
        $this->emitTo('sid2302.session', 'sceneCompleted');
    }
    
    public function render()
    {
        $this->updateCurrentPatient();
        return view('livewire.sid2302.sidebar');
    }
}
