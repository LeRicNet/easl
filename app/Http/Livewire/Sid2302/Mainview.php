<?php

namespace App\Http\Livewire\Sid2302;

use Livewire\Component;

class Mainview extends Component
{
    public $mode = 'off';

    protected $listeners = [
        'showComparison' => 'showcomparison',
        'autocomplete' => 'autocomplete',
        'updateMainview' => 'render'
    ];

//    public function testfn()
//    {
//        dump('pass');
//    }
    
    public function showcomparison()
    {
        $this->mode = 'comparison';
    }
    
    public function autocomplete()
    {
        $this->mode = 'autocomplete';
    }
    
    public function render()
    {
        return view('livewire.sid2302.mainview');
    }
}
