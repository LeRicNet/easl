<?php

namespace App\Http\Livewire\Sid2302\Utils;

use Livewire\Component;

class Barchart extends Component
{
    public $featureDBKey;
    public $featureValue;
    public $chartId;
    public $divKey = 'missing';
    
//    protected $listeners = [
//        'updateBarchart' => 'render'
//    ];
    
    public function makeChartId()
    {
        $this->chartId = $this->featureDBKey . '_autobar';
    }

    public function testfn()
    {
        dump($this->featureValue);
    }

    public function render()
    {
        $this->makeChartId();
        return view('livewire.sid2302.utils.barchart');
    }
}
