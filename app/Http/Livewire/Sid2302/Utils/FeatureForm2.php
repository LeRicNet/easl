<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\CurrentPatient;
use App\Models\TaskForm;

class FeatureForm2 extends Component
{

    // This is a copy of sid2302.FeatureForm
    public $autocomplete = false;
    public $target_patient;
    
    protected $listeners = [
      'update_form' => 'update_form'  
    ];
    
    public function update_form($option_group, $feature, $value)
    {
        $patient = CurrentPatient::first()->patient;
        $sessionID = ActiveSession::latest('consentedAt')
            ->first()
            ->sessionID;

//        if (TaskForm::where('sessionID', $sessionID)
//                ->where('currentPatient', $patient)
//                ->whereNotNull($option_group)
//                ->count() > 0) {
//            TaskForm::where('sessionID', $sessionID)
//                ->where('currentPatient', $patient)
//                ->whereNotNull($option_group)
//                ->update([$option_group => null]);
//        }
//        else {
            if (TaskForm::where('sessionID', $sessionID)->where('currentPatient', $patient)->count() > 0) {
                TaskForm::where('sessionID', $sessionID)
                    ->where('currentPatient', $patient)
                    ->update([$option_group => $value]);
            } else {
                TaskForm::insert([
                    'sessionID' => $sessionID,
                    'currentPatient' => $patient,
                    $option_group => $value
                ]);
            }
//        }
    }
    
    public function render()
    {
        return view('livewire.sid2302.utils.feature-form2');
    }
}
