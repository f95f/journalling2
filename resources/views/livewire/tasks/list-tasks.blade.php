<div>

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Home</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
    </div>


  <div class="content">
    <div class="container-fluid">

      <div class="row mb-3 mx-1">

        <input type="text" class="large-input " placeholder="O que você deseja fazer?">

        <button wire:click.prevent="addTask">Adicionar</button>

      </div>

      <div class="row">

        <div class="col-lg-3">

          <div class="card">
            
            <div class="card-header">




            </div>


            <div class="card-body">




            </div>


            <div class="card-footer d-flex gap-2 justify-content-end">

                <a role="button">
                    <i class="fa fa-edit"></i>
                </a>

                <span class="text-muted mx-2">|</span>

                <a role="button">
                    <i class="fa fa-trash text-danger"></i>
                </a>


            </div>

          </div>


        </div>
        
      </div>
    </div>
  </div>


  {{-- Create Form Modal --}}
  <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  

</div>
