<?php

namespace App\Http\Livewire\Sid2302\Ui\Barco;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2 as Scene;
use App\Models\BarcoRight as BR;

class BarcoRight extends Component
{
    public $study_uid;
    public $considering_view = false;
    public $current_scene = 'consent';

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
        if (BR::count() > 0) {
            $most_recent_update = BR::orderBy('updated', 'desc')
                ->get()
                ->first();
            if ($most_recent_update->status == 'hover') {
                $this->considering_view = true;
            } else if ($most_recent_update->status == 'hover-leave') {
                $this->considering_view = false;
            }

            if (BR::where('status', 'select',)->count() > 0) {

                $this->study_uid = BR::orderBy('updated', 'desc')
                    ->where('status', 'select')
                    ->get()->first()->study_uid;
            }
        } else {
            $this->study_uid = null;
        }
    }
    
    public function render()
    {
        $this->getSessionStatus();
        $this->getStudyUID();
        return view('livewire.sid2302.ui.barco.barco-right');
    }
}
