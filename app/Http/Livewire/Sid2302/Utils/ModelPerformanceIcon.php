<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;
use App\Models\ModelPerformance;

class ModelPerformanceIcon extends Component
{

    public $feature;
    public $metric;
    public $value;

    public function get_value()
    {
        $value = ModelPerformance::where('feature', $this->feature)
            ->where('metric', $this->metric);
        if ($value->count() == 0) {
            $this->value = 0;
        } else {
            $this->value = $value->first()->value;
        }
    }

    public function render()
    {
        $this->get_value();
        return view('livewire.sid2302.utils.model-performance-icon');
    }
}
