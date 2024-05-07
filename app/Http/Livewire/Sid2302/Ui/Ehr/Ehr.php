<?php

namespace App\Http\Livewire\Sid2302\Ui\Ehr;

use Livewire\Component;
use App\Models\CurrentPatient;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;
use App\Models\TestPatients;
use App\Models\PatientKey;

date_default_timezone_set('America/Denver');

class Ehr extends Component
{

    public $current_patient;
    public $current_patient_index;
    public $current_patient_name;
    public $current_scene = 'no_session';
    public $test_patients;
    public $test_patient_notes;
    public $sessionID;
    
    public $show_time = false;
    public $remaining_time;
    public $time_limit_reached = false;

    public function mount()
    {
        $this->test_patients = TestPatients::select('patient')->get();
        $this->test_patients_array = TestPatients::select('patient')->get()->toArray();
        $this->test_patient_notes = TestPatients::select('note')->get()->toArray();
    }

    public function getPatientName($patient)
    {
        $name = PatientKey::where('studyIdentifier',  trim($patient, "ACP"))
            ->select('patientName')
            ->first()
            ->patientName;
        return $name;
    }

    public function getSessionRemainingTime()
    {
        $startTime = date('H:i:s', strtotime(ActiveSession::latest('consentedAt')
            ->select('consentedAt')
            ->first()
            ->consentedAt));
        $endTime = date("H:i:s", strtotime('+30 minutes', strtotime($startTime)));

        $currentTime = date("H:i:s", strtotime(now()));

        $timeRemaining = strtotime($endTime) - strtotime($currentTime);

        $minutesRemaining = floor($timeRemaining/60);
        $secondsRemaining = $timeRemaining % 60;

//        if ($minutesRemaining < 15) {
//            $this->time_limit_reached = true;
//        }
        
        $this->remaining_time = date('i', $minutesRemaining * 60) . ":" . date('s', $secondsRemaining);
    }
    
    public function getSessionStatus()
    {
//        $this->getSessionRemainingTime();
        if (ActiveSession::count() > 0) {
            $sessionID = ActiveSession::latest('consentedAt')->first()->sessionID;
            $current_scene = Scene::where('sessionID', $sessionID)
                ->latest('started')
                ->get()
                ->first();

            $this->sessionID = $sessionID;
            $this->current_scene = $current_scene->scene;
            $this->current_patient = CurrentPatient::first()->patient;

            if (TestPatients::where('patient', $this->current_patient)->count() > 0) {
                $this->current_patient_note = TestPatients::where('patient', $this->current_patient)
                    ->select('note')
                    ->first()
                    ->note;
                $this->current_patient_name = PatientKey::where('studyIdentifier',  trim($this->current_patient, 'ACP'))
                    ->select('patientName')
                    ->first()
                    ->patientName;
            }
            
            if ($this->current_scene != 'no_session' or $this->current_scene != 'consent') {
                $this->show_time = true;
            }
        }
    }

    public function exitSession()
    {
        $this->emitTo('sid2302.session', 'sceneCompleted', 'true');
    }

    public function render()
    {
        $this->getSessionStatus();
        $this->getSessionRemainingTime();
        return view('livewire.sid2302.ui.ehr.ehr');
    }
}
