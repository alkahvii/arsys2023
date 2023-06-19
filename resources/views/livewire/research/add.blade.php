<div>
    <div class= "row">
        <div style="font-family: serif; text-align: left; font-size: 12pt; width: 50%;">
            <x-adminlte-input name="iUser" label="Judul Research Data" placeholder="Tuliskan Judul....." label-class="text-lightgrey">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-blue">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </x-slot>
            </x-adminlte-input> 
        </div>
        <div style="font-family: serif; text-align: left; font-size: 12pt; width: 5%"></div>
        <div class="align-left" style="font-family: serif; text-align: left; font-size: 12pt; width: 40%;" >
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
<div><button wire:click="submit" data-dismiss="modal" class="success" style="width:15%;border-radius:10px;background-color: blue;color:white;"><i class="fas fa-save"></i>&nbsp; SAVE &nbsp;</button></div>

