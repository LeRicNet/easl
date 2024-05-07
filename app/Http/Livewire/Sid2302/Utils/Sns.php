<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\CurrentPatient;
use App\Models\Scene2 as Scene;
use App\Models\SnsForm;

class Sns extends Component
{
    
    public $currentSNSQuestionSet = 1;
    public $selected;
    public $required_fields_filled_form_1;
    public $required_fields_filled_form_2;

    protected $listeners = [
        'nextquestion' => 'nextquestion'
    ];

    public function update_form($feature, $value)
    {
        $sessionID = ActiveSession::latest('consentedAt')
            ->first()
            ->sessionID;

        if (SnsForm::where('sessionID', $sessionID)->count() > 0) {
            SnsForm::where('sessionID', $sessionID)
                ->update([$feature => $value]);
        } else {
            SnsForm::insert([
                'sessionID' => $sessionID,
                $feature => $value
            ]);
        }
    }

    public function nextquestion()
    {
        $this->currentSNSQuestionSet++;
    }

    public function nextscene()
    {
        date_default_timezone_set('America/Denver');
        $scene_completed_at = date('Y-m-d H:i:s', time());

        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;

        Scene::where('sessionID', $this->sessionID)
            ->where('completed', null)
            ->update(['completed' => $scene_completed_at]);

//        $this->emitTo('sid2302.session', 'sceneCompleted');
        $this->emitTo('sid2302.session', 'start_instructions');
    }

    public function render()
    {
        $sessionID = ActiveSession::latest('consentedAt')->first()->sessionID;
        $this->required_fields_filled_form_1 = SnsForm::where('sessionID', $sessionID)
            ->whereNotNull(['sns_1', 'sns_2', 'sns_3', 'sns_4'])
            ->count();
        $this->required_fields_filled_form_2 = SnsForm::where('sessionID', $sessionID)
            ->whereNotNull(['sns_5', 'sns_6', 'sns_7', 'sns_8'])
            ->count();
        return view('livewire.sid2302.utils.sns');
    }
}
