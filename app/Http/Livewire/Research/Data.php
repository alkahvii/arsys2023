<?php

namespace App\Http\Livewire\Research;

use Livewire\Component;

class Data extends Component
{
    protected $listeners=['submit'];
    public $modeData=null;
    public function render()
    {
        return view('livewire.research.data');
    }
    public function add()
    {
    $this->modeData="add";
    }
    public function submit()
    {
    $this->modeData=null;
    }
}