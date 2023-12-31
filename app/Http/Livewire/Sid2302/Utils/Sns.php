<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\Scene;

class Sns extends Component
{
    
    public $currentSNSQuestion = 0;

    protected $listeners = [
        'nextquestion' => 'nextquestion'
    ];

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
        $this->emitTo('sid2302.session', 'sceneCompleted');
    }

    public function render()
    {
        return view('livewire.sid2302.utils.sns');
    }
}
