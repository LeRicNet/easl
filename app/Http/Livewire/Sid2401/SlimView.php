<?php

namespace App\Http\Livewire\Sid2401;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;
use App\Models\BarcoLeft as BL;
use App\Models\CurrentPatient;
use App\Models\DcmDatabase;
use App\Models\PatientKey;

class SlimView extends Component
{
    public $study_uid;
    public $current_patient;
    public $considering_view = false;
    public $current_scene = 'consent';
    public $url = 'http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs=';

    public function getSessionStatus()
    {
        if (ActiveSession::count() > 0) {
            $sessionID = ActiveSession::latest('consentedAt')->first()->sessionID;
            $current_scene = Scene::where('sessionID', $sessionID)
                ->latest('started')
                ->get()
                ->first();

            $this->current_scene = $current_scene->scene;
        }
    }

    public function getStudyUID()
    {
        $this->current_patient = trim(CurrentPatient::first()->patient, 'ACP');
        if (BL::count() > 0) {
            $most_recent_update = BL::orderBy('updated', 'desc')
                ->get()
                ->first();
            if ($most_recent_update->status == 'hover') {
                $this->considering_view = true;
            } else if ($most_recent_update->status == 'hover-leave') {
                $this->considering_view = false;
            }

            if (BL::where('status', 'select',)->count() > 0) {
                $this->study_uid = BL::orderBy('updated', 'desc')
                    ->where('status', 'select')
                    ->get()->first()->study_uid;
            }
        } else {
            $this->study_uid = DcmDatabase::where('patient', $this->current_patient)
                ->select('study_uid')
                ->distinct()
                ->first()
                ->study_uid;
        }
    }

    public function render()
    {
        $this->getSessionStatus();
        $this->getStudyUID();
        $this->url = $this->url . $this->study_uid;
        return view('livewire.sid2401.slim-view');
    }
}
