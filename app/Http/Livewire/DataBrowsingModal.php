<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBrowsingModal extends Component
{
    public $modalLabel = 0;

    public function create()
    {
        $this->modalLabel;
    }

    public function render()
    {
        return view('livewire.data-browsing-modal');
    }
}
