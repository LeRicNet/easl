<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;
use App\Models\Scene;
use App\Models\CurrentPatient;

class Session extends Component
{

    public $isActive = false;
    public $current_patient = 0;
    public $current_scene = 'trial_1';
    public $narrative = [
//        'consent',
//        'persona_survey',
//        'instructions',
        'trial_1',
//        'trial_2',
//        'trial_3',
//        'exit_survey',
//        'end'
    ];
    
    protected $listeners = [
        'sceneCompleted' => 'updateSession',
        'getNextPatient' => 'getNextPatient'
    ];
    
    public function getNextPatient()
    {
        if ($this->current_patient < 50) {
            date_default_timezone_set('America/Denver');
            $current_session = Scene::first()->getAttributes()['sessionID'];
            $session_completed_at = date('Y-m-d H:i:s', time());

            $this->current_patient++;

            if (CurrentPatient::count() > 0) {
                $patient = CurrentPatient::first();
                CurrentPatient::where('patient', $patient->patient)->delete();
            }

            CurrentPatient::insert([
                'patient' => $this->current_patient,
                'updated' => $session_completed_at
            ]);
            
            Scene::insert([
                'sessionID' => $current_session,
                'scene' => 'persona_survey',
                'completed' => $session_completed_at
            ]);

            $this->emitTo('sid2302.target-patient-header', 'refreshHeader');
//            $this->emitTo('sid2302.patient-image-table', 'refreshTable');
            $this->dispatchBrowserEvent('refreshPatientTable');
            $this->dispatchBrowserEvent('refreshBarchart');
            $this->emitTo('sid2302.utils.checkbox', 'updateFeatureValue');
            $this->emitTo('sid2302.utils.barchart', 'updateBarchart');
            
            $this->emit('updateMainview');
            //
        }
    }

    public function updateSession()
    {
        $current_scene = Scene::latest('completed')->select('scene')->get();
        $current_scene = $current_scene->first()->scene;
        $current_index = array_search($current_scene, $this->narrative);
        if ($current_index < count($this->narrative)) {
            $next_index = $current_index + 1;
            $this->current_scene = $this->narrative[$next_index];
        }
    }

    public function render()
    {
        return view('livewire.sid2302.session');
    }
}
