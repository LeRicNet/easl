<?php

namespace App\Http\Livewire\Sid2302\Session;

use Livewire\Component;
use App\Models\Scene;

class PersonaSurvey extends Component
{
    public $currentSNSQuestion = 0;

    public function nextquestion()
    {
        $this->currentSNSQuestion++;
    }
    
    public function nextscene()
    {
        date_default_timezone_set('America/Denver');
        $current_session = Scene::first()->getAttributes()['sessionID'];
        $session_completed_at = date('Y-m-d H:i:s', time());

        Scene::insert([
            'sessionID' => $current_session,
            'scene' => 'persona_survey',
            'completed' => $session_completed_at
        ]);
        $this->emitUp('sceneCompleted');
    }
    
    public function render()
    {
        return view('livewire.sid2302.session.persona-survey');
    }
}
