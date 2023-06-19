<?php

namespace App\Http\Livewire\Research;

use App\Models\Research\Data as ResearchData;
use Livewire\Component;

class Data extends Component
{
    public $data;
    protected $listeners=['submit'];
    public $modeData=null;
    public function render()
    {
        $this->data=ResearchData::orderBy('updated_at', 'desc')->get();;
        return view('livewire.research.data');
    }
    public function edit()
    {
        foreach($this->data as $data){
            dd($data->id,$data->title, $data->identitas->first_name, $data->identitas->last_name,
        $data->identitas->student_number, $data->identitas->program->description, $data->identitas->program->abbrev,
        $data->research_code, $data->kondisi->phase, $data->dosen);
        }
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