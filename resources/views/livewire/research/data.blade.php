@if($modeData!="add")
<div>
<div><button wire:click="add" class="success" style="width:30%;border-radius:10px;background-color:#0098db;color:white;"><i class="fas fa-microscope"></i>&nbsp; ADD RESEARCH</button></div>
    <br>
<div class="card">
    <div class="card-header">
        <div class="text-center"><b>Research Data</b>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div> 
            <div><u><b>Judul Research Data</b></u>
            </div>
            <div>File of proposal could be accessed "Read File Proposal"
            </div>
        </div>
        <br>
        <br>
        <div> 
            <div>Kode Event|
            </div>
            <div>Kondisi Research Data
            </div>
        </div>
        <br>
        <x-adminlte-button theme="warning" class="btn btn-sm" icon="fa fa-edit" wire:click="edit" label="Edit"/>
    </div>
    <div class="card-body">
        <div class="row"> 
            <div class="col-md-8" style = "border-bottom-style: solid; border-bottom-color: grey; border-bottom-width: 1px; border-right-style: solid; border-right-color: grey; border-right-width: 0.5px;">
                <div class="col-md-12" style = "border-bottom-style: solid; border-bottom-color: grey; border-bottom-width: 1px;">
                <b>Progress of Supervision</b>
                </div>
                <br>
                <div class="col-md-12" style = "border-bottom-style: solid; border-bottom-color: grey; border-bottom-width: 1px;">
                Nama Supervisor Add Meeting bypass
                </div>
                <div class="col-md-12" style = "border-bottom-style: solid; border-bottom-color: grey; border-bottom-width: 1px;">
                <div rowspan="2"style="vertikal-align:middle;"><b>To-do List</b></div>
                <br>
                </div>
                <div class="col-md-12">
                Add
                </div>
            </div>
            <div class="col-md-4" style = "border-bottom-style: solid; border-bottom-color: grey; border-bottom-width: 1px;">
            <div class="col-md-12" style= "border-style: solid; border-color: grey; border-width: 1px;"><div><b>Approval Research Data</b></div>
            <div>Tipe Research Data|Nama Supervisor
            </div>
            </div>
            <br>
            <div class="col-md-12" style= "border-style: solid; border-color: grey; border-width: 1px;"><div><b>Applied Event</b></div>
            <div>Event Type Updated at
            </div>
            </div>
            </div>
    
        </div>
    </div>
</div>
</div>
@else
@livewire('research.add')
@endif
