<?php

namespace App\Http\Livewire\Sid2302\Ui\Sidebar;

use App\Models\DcmDatabase;
use App\Models\CurrentPatient;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PatientImageTable extends LivewireDatatable
{
    public $current_patient;

    protected $listeners =[
        'refresh' => '$refresh'
    ];

    public function builder()
    {
        $this->perPage = 3;
        $this->hidePagination = true;
        $this->current_patient = CurrentPatient::latest('updated')->get()->first()->patient;
        return DcmDatabase::where('patient',
            trim($this->current_patient, 'ACP'))
            ->select(['modality', 'study_description', 'study_uid'])
            ->distinct();
    }

    public function columns()
    {
        return [
            Column::name('modality')->unsortable(),
            Column::name('study_description')->label('study description')->unsortable(),
            Column::callback(['study_uid'], function ($study_uid) {
                return view('sid2302.ui.show-image-button', ['study_uid' => $study_uid]);
            })->exportCallback(function ($value) {
                return $value;
            })->unsortable()
        ];
    }

    public function cellClasses($row, $column)
    {
        return 'text-xs text-gray-900';
    }
}