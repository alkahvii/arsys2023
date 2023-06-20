<div>
    <div class="card">
        <div class="card-body">
            <div>
                Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:   {{$data->first_name}} {{$data->last_name}}

            </div>
            <div>
                NIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$data->student_number}}
            </div> 
            <div>
                Jurusan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$data->program->description}}
            </div> 
            <div>
                Konsentrasi&nbsp;: {{$data->specialization->description}}
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class= "row">
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 50%;">
                    <x-adminlte-textarea name="taDesc" label="Judul Research Data" placeholder="Tuliskan Judul....." label-class="text-lightgrey">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-pen-nib"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input> 
                </div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 5%"></div>
                <div class="align-left" style="font-family: serif; text-align: left; font-size: 12pt; width: 45%;" >
                    <x-adminlte-input-file id="ifMultiple" name="ifMultiple[]" label="Upload files"
                        placeholder="Input File....." igroup-size="xlg" legend="Choose" multiple>
                        <x-slot name="appendSlot">
                            <x-adminlte-button theme="primary" label="Upload"/>
                        </x-slot>
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-file-upload"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-file>
                </div>
            </div>
        </div>
    </div>
</div>

