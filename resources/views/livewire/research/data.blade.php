<div>
<div><button data-toggle="modal" data-target="#assignModal" class="success" style="width:30%;border-radius:10px;background-color:#0098db;color:white;"><i class="fas fa-microscope"></i>&nbsp; ADD RESEARCH</button></div>
<div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
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
                      <div class="row">
                        <div style="color:darkgreen; font-style:italic">JKR </div>
                        <div style="width:1%"></div>
                        <button type="button" style="color:black" class="btn btn-tool"><i class="fas fa-plus text-blue"></i>Add Meeting</button> 
                        <div style="width:1%"></div>
                        <button type="button" style="color:black" class="btn btn-tool"><i class="fas fa-check text-blue"></i>bypass</button>
                        
                      </div>
                        
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
                      <button type="button" style="color:black" class="btn btn-tool"><i class="fas fa-plus text-blue"></i> Add </button>
                        
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
                    Tipe Research Data|Nama Supervisor
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
                    Event Type Updated at
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
