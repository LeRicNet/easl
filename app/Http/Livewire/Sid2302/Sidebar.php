<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;
use App\Models\CurrentPatient;
use App\Models\PatientKey;
use App\Models\AIEnabled;
use App\Models\TaskForm;

date_default_timezone_set('America/Denver');

class Sidebar extends Component
{

    public $current_patient;
    public $is_ai_enabled = false;
    public $required_fields_filled = 0;
    public $time_limit_reached = 0;
    
    protected $listeners = [
        'currentPatient' => 'updateCurrentPatient'
    ];
    
    public function mount() {
//        $this->required_fields_unfilled = ! boolval($required_fields_filled);
    }
    
    public function nextpatient()
    {
//        $this->emitTo('sid2302.session', 'getNextPatient');
        date_default_timezone_set('America/Denver');
        $scene_completed_at = date('Y-m-d H:i:s', time());

        $sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;

        Scene::where('sessionID', $sessionID)
            ->where('completed', null)
            ->update(['completed' => $scene_completed_at]);
        
        $this->emitTo('sid2302.mainview', 'showTaskSurvey');
    }
    
    public function previouspatient()
    {
//        $this->emitTo('sid2302.target-patient-header', 'previousPatient');
//        $this->emitTo('sid2302.checkbox', 'previousPatient');
//        $this->emitTo('sid2302.patient-image-table', 'previousPatient');
    }

    public function early_exit()
    {
        $sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;
        Scene::insert([
            'sessionID' => $sessionID,
            'scene' => 'trial_10',
            'started' => date('Y-m-d H:i:s', time()),
            'completed' => date('Y-m-d H:i:s', time())
        ]);
        $this->emitTo('sid2302.session',  'early_exit');
    }
    
    public function updateCurrentPatient()
    {
        $patient = intval(trim(CurrentPatient::first()->patient, 'ACP'));
        $patientNameJSON = PatientKey::where('studyIdentifier', $patient)
            ->select('patientName')
            ->get();

        $patientName = $patientNameJSON[0]['patientName'];
        $this->current_patient = $patientName;

        $this->is_ai_enabled = AIEnabled::first()->is_ai_enabled;
    }

    public function updateAIStatus()
    {
        $ai_status_updated_at = date('Y-m-d H:i:s', time());
        $current_status = AIEnabled::first()->is_ai_enabled;
        $this->is_ai_enabled = ! $current_status;
        AIEnabled::where('is_ai_enabled', $current_status)->delete();
        AIEnabled::insert([
            'is_ai_enabled' => $this->is_ai_enabled,
            'updated' => $ai_status_updated_at
        ]);
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

        if ($minutesRemaining < 3) {
            $this->time_limit_reached = 1;
        }
    }
    
    public function render()
    {
        $patient = CurrentPatient::first()->patient;
        $sessionID = ActiveSession::latest('consentedAt')->first()->sessionID;

        $this->getSessionRemainingTime();

        $this->required_fields_filled = TaskForm::where('sessionID', $sessionID)
            ->where('currentPatient', $patient)
            ->whereNotNull(['tumor_type', 'tumor_location', 'hypoinvasion'])
            ->count();
        $this->updateCurrentPatient();
        return view('livewire.sid2302.sidebar');
    }
}
