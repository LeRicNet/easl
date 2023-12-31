<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;
use App\Models\DcmDatabase;
use App\Models\CurrentPatient;

class PatientImageTable extends Component
{
//    public int $patient = 1;
    public $patientImages;
//
//    protected $listeners = [
//        'nextPatient' => 'nextpatient',
//        'previousPatient' => 'previouspatient'
//    ];
//
//    public function nextpatient()
//    {
//        if ($this->patient < 50) {
//            $this->patient++;
//        }
//    }
//
//    public function previouspatient()
//    {
//        if ($this->patient > 1) {
//            $this->patient--;
//        }
//    }
    
    public function getPatientImages()
    {
        $patient = intval(CurrentPatient::first()->patient);
        $this->patientImages = DcmDatabase::where('patient', $patient)->get();
    }
    
    public function render()
    {
//        $this->getPatientImages();
        return view('livewire.sid2302.patient-image-table');
    }
}
