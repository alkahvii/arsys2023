<?php

namespace App\Http\Livewire\Research;

use App\Models\ArSys\Student;
use App\Models\Research\Data as ResearchData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Data extends Component
{
    public $data, $student; 
    protected $listeners=['submit'];
    public $modeData=null;
    public function mount()
    {

    }
    public function render()
    {
        $this->data=Student::where('user_id',Auth::user()->id)->first();
        return view('livewire.research.data');
    }
    public function edit()
    {
        
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