<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;

class SummaryCard extends Component
{
    public string $title;
    public string $mode;
    public int $statistic;

    public function render()
    {
        if ( $this->mode == 'primary') {
            $this->statistic = DB::table('samples')
                ->distinct()
                ->count('primary_id');
        } else {
            $this->statistic = 0;
        }

        return view('livewire.summary-card');
    }
}
