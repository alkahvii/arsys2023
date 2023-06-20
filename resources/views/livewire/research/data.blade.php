<div>
  <div><button data-toggle="modal" data-target="#assignModal" class="success" style="width:30%;border-radius:10px;background-color:#0098db;color:white;"><i class="fas fa-microscope"></i>&nbsp; ADD RESEARCH</button></div>
<div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content" style="width:150%">
          <div class="modal-header" style="background-color:#0098db; color:azure;">
              <h5 class="modal-title" id="assignModalLabel"> <div style="font-family: serif; text-align: center; font-size: 25px;">
                <b>Form Research Data</b>
            </div></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <p>@livewire('research.add')</p>
              <div><button wire:click="submit" data-dismiss="modal" class="bg-gradient-blue"  style="width:15%;border-radius:10px;background-color: blue;color:white;"><i class="fas fa-save"></i>&nbsp; SAVE &nbsp;</button></div>
          </div>
          
      </div>
  </div>
</div><br>
<div class="card">
    <div class="card-header">
        <div class="text-center"><b>Research Data</b>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div> 
            <div><u><b>@foreach ($data->research as $data)
              {{$data->title}}
              @endforeach</b></u>
            </div>
            <div>File of proposal could be accessed <a target="_blank" rel="noopener noreferrer" href="https://drive.google.com/drive/folders/1d681TfoKzFe8ueYoG-YxkdxWYSgNrxrj?usp=sharing"><i class="fa fa-file-pdf"></i> <u>File PDF</u></a>
            </div>
        </div>
        <br>
        <br>
        <div> 
            <div>{{$data->event}}|
            </div>
            <div>{{$data->kondisi->phase}}
            </div>
        </div>
        <br>
        <x-adminlte-button theme="warning" class="btn btn-sm" icon="fa fa-edit" wire:click="edit" label="Edit"/>
    </div>
    <div class="card-body">
        <div class="row"> 
            <div class="col-md-8">

                
                 <div><div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-spinner"></i><b> Progress of Supervision</b></h3>
                      <div class="card-tools">
                        <!-- Collapse Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">Click to unfold/fold <i class="fas fa-arrow-down text-blue"></i></button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      @livewire ('research.progress')
                        
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card --></div>
                
                <br>
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-list"></i><b> To-do List</b></h3>
                      <div class="card-tools">
                        <!-- Collapse Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">Click to unfold/fold <i class="fas fa-arrow-down text-blue"></i></button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      @livewire('research.todo')                   
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                
            
            </div>
            <div class="col-md-4">
            <div class="col-md-12"><div><div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>Approval Research Data</b></h3>
                  <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @livewire('research.approval')
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
                </div>
            
            </div>
            <br><div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>Applied Event</b></h3>
                  <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @livewire('research.applied')
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            <div class="col-md-12" ><div></div>
            </div>
            </div>
            </div>
    
        </div>
    </div>
</div>
</div>
