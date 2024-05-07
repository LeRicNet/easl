<?php

namespace App\Http\Livewire\Sid2302\Session;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;

class Instructions extends Component
{
    public $instruction_slide = 1;

    protected $listeners = [
        'next_instruction_slide' => 'next_instruction_slide'
    ];

    public function replay_instructions()
    {
        $this->instruction_slide = 1;
    }

    public function previous_instruction_slide()
    {
        if ($this->instruction_slide > 1) {
            $this->instruction_slide--;
        }
    }

    public function next_instruction_slide()
    {
        if ($this->instruction_slide < 10) {
            $this->instruction_slide++;
        }
    }
    
    public function nextscene()
    {
        date_default_timezone_set('America/Denver');
        $scene_completed_at = date('Y-m-d H:i:s', time());

        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;

        Scene::where('sessionID', $this->sessionID)
            ->where('scene', 'instructions')
            ->where('completed', null)
            ->update(['completed' => $scene_completed_at]);

        $this->emitTo('sid2302.session', 'start_trials');
//        $current_session = Scene::first()->getAttributes()['sessionID'];
//        $session_completed_at = date('Y-m-d H:i:s', time());
//
//        Scene::insert([
//            'sessionID' => $current_session,
//            'scene' => 'instructions',
//            'completed' => $session_completed_at
//        ]);
//        $this->emitTo('sid2302.session', 'sceneCompleted');
    }
    
    public function render()
    {
        return view('livewire.sid2302.session.instructions');
    }
}
