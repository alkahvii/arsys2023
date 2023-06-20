<?php

namespace App\Http\Livewire\Research;

use App\Models\ArSys\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Approval extends Component
{
    public function render()
    {
        $this->data=Student::where('user_id',Auth::user()->id)->first();
        return view('livewire.research.approval');
    }
}
