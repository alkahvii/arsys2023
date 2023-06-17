<div>
    <div class ="card ">
        <div class="card-header" style="background-color:#0098db; color:azure;">
            <div style="font-family: serif; text-align: center; font-size: 25px;">
                <b>Form Research Data</b>
            </div>
        </div>
        <div class="card-body" style="background-color:#b8e3f8">
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
            <div class= "row">
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 25%">
                    <x-adminlte-input name="iUser" label="Nama Mahasiswa" placeholder="Nama Lengkap" label-class="text-lightgrey">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-user"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input> 
                </div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 5%"></div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 25%">
                    <x-adminlte-input name="iUser" label="NIM" placeholder="Input NIM" label-class="text-lightgrey">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-address-card"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input> 
                </div>
            </div>
            <div class= "row">
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 45%">
                    <x-adminlte-select label="Event Type" igroup-size="md" style="" wire:model="program" id="program" name="program">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-book"></i>
                            </div>
                        </x-slot>
                        <option default>Please select your event type</option>
                        <option>Vehicle 1</option>
                        <option>Vehicle 2</option>
                    </x-adminlte-select>
                </div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 5%"></div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 25%">
                    <x-adminlte-input name="iUser" label="Nomor Surat" placeholder="Input SK" label-class="text-lightgrey">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input> 
                </div>
            </div>
            <div class= "row">
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 35%">
                    <x-adminlte-select label="Dosen Pembimbing 1" igroup-size="md" style="" wire:model="program" id="program" name="program">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </x-slot>
                        <option default>Pilih Dosen Pembimbing Anda</option>
                        <option>Dosen 1</option>
                        <option>Dosen 2</option>
                    </x-adminlte-select>
                </div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 5%"></div>
                <div style="font-family: serif; text-align: left; font-size: 12pt; width: 35%">
                    <x-adminlte-select label="Dosen Pembimbing 2" igroup-size="md" style="" wire:model="program" id="program" name="program">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-blue">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </x-slot>
                        <option default>Pilih Dosen Pembimbing Anda</option>
                        <option>Dosen 1</option>
                        <option>Dosen 2</option>
                    </x-adminlte-select>
                </div>
            </div>
        </div>
        <div class="card-footer" style="background-color:#0098db; color:azure;">
            <div style="font-family: serif; text-align: right; font-size: 12pt">
                <div><button wire:click="submit" class="success" style="width:15%;border-radius:10px;background-color: #012d56c5 ;color:white;"><i class="fas fa-save"></i>&nbsp; SAVE &nbsp;</button></div>
            </div>
        </div>
    </div>
    <br>
    <div><button wire:click="submit" class="success" style="width:15%;border-radius:10px;background-color:#0098db;color:white;"><i class="fas fa-file"></i>&nbsp; SUBMIT &nbsp;<i class="fas fa-check"></i></button></div>
</div>
