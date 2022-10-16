<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DatabaseTable extends Component
{

    public function render()
    {

        return view('livewire.database-table');
    }
}
