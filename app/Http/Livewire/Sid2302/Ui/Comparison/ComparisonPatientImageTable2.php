<?php

namespace App\Http\Livewire\Sid2302\Ui\Comparison;

use Livewire\Component;
use App\Models\DcmDatabase;
use App\Models\ComparisonPatient;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ComparisonPatientImageTable2 extends LivewireDatatable
{

    public $comparison_patient;

    protected $listeners =[
      'refresh' => '$refresh'
    ];

    public function builder()
    {
        $this->perPage = 3;
        $this->hidePagination = true;
        $this->comparison_patient = ComparisonPatient::orderBy('updated', 'desc')->get()->first()->patient;
        return DcmDatabase::where('patient',
            trim($this->comparison_patient, 'ACP'))
            ->select(['modality', 'study_description', 'study_uid'])
            ->distinct();
//        return ComparisonPatient::query();
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
    
//    public function rowView(): string
//    {
//        return 'sid2302.ui.comparison.comparison-patient-image-table2';
//    }
}
