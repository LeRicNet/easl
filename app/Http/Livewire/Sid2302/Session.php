<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;
use App\Models\TestPatients;
use App\Models\CurrentPatient;
use App\Models\ComparisonPatient;
use App\Models\AIEnabled;
use App\Models\BarcoLeft;
use App\Models\BarcoRight;

date_default_timezone_set('America/Denver');

class Session extends Component
{

    public $sessionID;
    public $isActive = false;
    public $current_patient;
    public $AIenabled = false;
    public $current_scene = 'consent';
    public $narrative = [
        'consent',
        'persona_survey',
        'instructions',
        'trial_1',
        'trial_2',
        'trial_3',
        'trial_4',
        'trial_5',
        'trial_6',
        'trial_7',
        'trial_8',
        'trial_9',
        'trial_10',
        'exit_survey',
        'end'
    ];
    
    protected $listeners = [
        'sceneCompleted' => 'updateSession',
        'getNextPatient' => 'getNextPatient',
        'update_comparison' => 'updateComparison',
        'update_barco' => 'update_barco',
        'start_persona_survey' => 'start_persona_survey',
        'start_instructions' => 'start_instructions',
        'start_trials' => 'start_trials',
        'early_exit' => 'early_exit',
        'end_session' => 'end_session',
        'restart_session' => 'restart_session'
    ];

    public function start_persona_survey()
    {
        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;
        Scene::insert([
            'sessionID' => $this->sessionID,
            'scene' => 'persona_survey',
            'started' => date('Y-m-d H:i:s', time())
        ]);
        $this->current_scene = 'persona_survey';
    }

    public function start_trials()
    {
        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;
        Scene::insert([
            'sessionID' => $this->sessionID,
            'scene' => 'trial_1',
            'started' => date('Y-m-d H:i:s', time())
        ]);
        $this->current_scene = 'trial_1';
    }

    public function start_instructions()
    {
        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;
        Scene::insert([
            'sessionID' => $this->sessionID,
            'scene' => 'instructions',
            'started' => date('Y-m-d H:i:s', time())
        ]);
        $this->current_scene = 'instructions';
    }

    public function next()
    {
        dump('fired');
    }


    public function restart_session()
    {
        $this->current_scene = $this->narrative[0];
    }

    public function end_session()
    {
        $this->current_scene = 'end';
    }
    
    public function early_exit()
    {
        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;
        Scene::insert([
            'sessionID' => $this->sessionID,
            'scene' => 'exit_survey',
            'started' => date('Y-m-d H:i:s', time())
        ]);
        $this->current_scene = 'exit_survey';
    }
  
    
    public function update_barco($study_uid, $status, $side)
    {
        $current_session = Scene::first()->getAttributes()['sessionID'];
        $barco_updated_at = date('Y-m-d H:i:s', time());
        if ($side == 'left') {
            BarcoLeft::insert([
                'session' => $current_session,
                'study_uid' => $study_uid,
                'status' => $status,
                'updated' => $barco_updated_at
            ]);   
        } else if ($side == 'right') {
            BarcoRight::insert([
                'session' => $current_session,
                'study_uid' => $study_uid,
                'status' => $status,
                'updated' => $barco_updated_at
            ]);
        }
    }

    public function updateComparison($comparison_patient)
    {
        date_default_timezone_set('America/Denver');
        $current_session = Scene::first()->getAttributes()['sessionID'];
        $comparison_updated_at = date('Y-m-d H:i:s', time());

        if (ComparisonPatient::count() > 0) {
            $patient = ComparisonPatient::first();
            ComparisonPatient::where('patient', $patient->patient)->delete();
        }

        ComparisonPatient::insert([
            'patient' => $comparison_patient,
            'updated' => $comparison_updated_at
        ]);
        $this->emitTo('sid2302.ui.comparison.bottom-row', 'refresh');
        $this->emitTo('sid2302.ui.comparison.comparison-patient-info', 'refresh');
        $this->emitTo('sid2302.ui.comparison.comparison-patient-image-table2', 'refresh');
        $this->emitTo('sid2302.utils.barchart2', 'refreshBarchart');
        $this->emitTo('sid2302.utils.ground-truth-indicator', 'refreshGroundTruthIndicator');

    }
    
    public function getNextPatient()
    {
        date_default_timezone_set('America/Denver');
        $scene_completed_at = date('Y-m-d H:i:s', time());

        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')
            ->first()
            ->sessionID;

        Scene::where('sessionID', $this->sessionID)
            ->where('scene', $this->current_scene)
            ->where('completed', null)
            ->update(['completed' => $scene_completed_at]);

        if ($this->current_patient < 50) {

            $current_session = Scene::first()->getAttributes()['sessionID'];


            $this->current_patient++;

            if (CurrentPatient::count() > 0) {
                $patient = CurrentPatient::first();
                CurrentPatient::where('patient', $patient->patient)->delete();
            }
            
            CurrentPatient::insert([
                'patient' => $this->current_patient,
                'updated' => $scene_completed_at
            ]);


            $this->updateSession();

            $this->emitTo('sid2302.target-patient-header', 'refreshHeader');
            $this->emitTo('sid2302.ui.comparison.bottom-row', 'refresh');
            $this->emitTo('sid2302.ui.autocomplete-view', 'refresh');
            $this->emitTo('sid2302.ui.sidebar.patient-image-table', 'refresh');
            $this->emitTo('sid2302.utils.checkbox', 'updateFeatureValue');
            $this->emitTo('sid2302.utils.barchart', 'updateBarchart');
            $this->emitTo('sid2302.utils.barchart2', 'refreshBarchart');
            $this->emitTo('sid2302.ui.comparison.table2', 'refresh');
            
            $this->emit('updateMainview');

            //
        }
    }

    public function clearBarcos()
    {
        BarcoLeft::truncate();
        BarcoRight::truncate();
    }

    public function updateSession($force_exit=false)
    {
        $this->clearBarcos();
        $this->sessionID = ActiveSession::OrderBy('consentedAt', 'desc')->first()->sessionID;
        
        if ($force_exit) {
            dump('test');
//            Scene::insert([
//                'sessionID' => $this->sessionID,
//                'scene' => 'exit_survey',
//                'started' => date('Y-m-d H:i:s', time())
//            ]);
        } else {
            $current_scene = Scene::where('sessionID', $this->sessionID)->latest('completed')->first()->scene;
            $current_index = array_search($current_scene, $this->narrative);

            $this->previous_scene = $current_scene;
            $this->current_index=$current_index;

            if ($current_index < count($this->narrative)) {
                $next_index = $current_index + 1;
                $this->current_scene = $this->narrative[$next_index];
            }

            Scene::insert([
                'sessionID' => $this->sessionID,
                'scene' => $this->current_scene,
                'started' => date('Y-m-d H:i:s', time())
            ]);
        }
//        dump($this);

    }

    public function render()
    {
        return view('livewire.sid2302.session');
    }
}
