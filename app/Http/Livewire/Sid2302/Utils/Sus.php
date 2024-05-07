<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;
use App\Models\SusForm;

class Sus extends Component
{
    public $currentQuestionSet = 1;
    public $required_fields_filled_form_1;
    public $required_fields_filled_form_2;

    protected $listeners = [
        'nextquestion' => 'nextquestion'
    ];

    public function nextquestion()
    {
        $this->currentQuestionSet++;
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

        $this->emitTo('sid2302.session', 'end_session');
    }

    public function update_form($feature, $value)
    {
        $sessionID = ActiveSession::latest('consentedAt')
            ->first()
            ->sessionID;

        if (SusForm::where('sessionID', $sessionID)->count() > 0) {
            SusForm::where('sessionID', $sessionID)
                ->update([$feature => $value]);
        } else {
            SusForm::insert([
                'sessionID' => $sessionID,
                $feature => $value
            ]);
        }
    }


    public function render()
    {
        $sessionID = ActiveSession::latest('consentedAt')->first()->sessionID;
        $this->required_fields_filled_form_1 = SusForm::where('sessionID', $sessionID)
            ->whereNotNull(['sus_1', 'sus_2', 'sus_3', 'sus_4', 'sus_5'])
            ->count();
        $this->required_fields_filled_form_2 = SusForm::where('sessionID', $sessionID)
            ->whereNotNull(['sus_6', 'sus_7', 'sus_8', 'sus_9', 'sus_10'])
            ->count();
        return view('livewire.sid2302.utils.sus');
    }
}
