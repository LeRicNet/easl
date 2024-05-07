<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\CurrentPatient;
use App\Models\TaskSurveyForm;

class TaskSurvey extends Component
{

    public $difficulty;
    public $confidence;
    public $most_difficult;
    public $most_confident;
    public $required_fields_filled;

    public function update_form($feature, $value)
    {
        if ($feature == 'confidence') {
            $this->confidence = $value;
        } else if ($feature == 'difficulty') {
            $this->difficulty = $value;
        } else if ($feature == 'most_difficult') {
            $value = $this->most_difficult;
        } else if ($feature == 'most_confident') {
            $value = $this->most_confident;
        }

//        debug
//        if ($feature == 'most_difficult') {
//            dump($this);
//        }

        $patient = CurrentPatient::first()->patient;
        $sessionID = ActiveSession::latest('consentedAt')
            ->first()
            ->sessionID;

        if (TaskSurveyForm::where('sessionID', $sessionID)->where('currentPatient', $patient)->count() > 0) {
            TaskSurveyForm::where('sessionID', $sessionID)
                ->where('currentPatient', $patient)
                ->update([$feature => $value]);
        } else {
            TaskSurveyForm::insert([
                'sessionID' => $sessionID,
                'currentPatient' => $patient,
                $feature => $value
            ]);
        }


        $sessionID = ActiveSession::latest('consentedAt')->first()->sessionID;
        $patient = CurrentPatient::first()->patient;

        if ($this->confidence >= 4 and $this->difficulty < 4) {
            $fields = ['difficulty', 'confidence', 'most_confident'];
        } else if ($this->confidence < 4 and $this->difficulty >= 4) {
            $fields  = ['difficulty', 'confidence', 'most_difficult'];
        } else if ($this->confidence >= 4 and $this->difficulty >= 4) {
            $fields  = ['difficulty', 'confidence', 'most_difficult', 'most_confident'];
        } else {
            $fields  = ['difficulty', 'confidence'];
        }

        $this->required_fields_filled = TaskSurveyForm::where('sessionID', $sessionID)
            ->where('currentPatient', $patient)
            ->whereNotNull($fields)
            ->count();

    }

    public function nextscene()
    {
        $this->emitTo('sid2302.session', 'sceneCompleted');
    }

    public function render()
    {

        return view('livewire.sid2302.utils.task-survey');
    }
}
