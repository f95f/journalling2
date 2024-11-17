<div>

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Notes</h1>
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


    @if(session()->has("message"))
    <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between px-3" role="alert">
        <span>
            <strong class="mr-3">
                <i class="fa fa-check-circle"></i>
                Sucesso!
            </strong> {{ session('message') }}
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    

      <div class="row mb-3 mx-1">

        <input wire:click="$dispatch('show-form')" type="text" class="large-input " placeholder="O que você deseja lembrar?">

      </div>

      <div class="row">

        @foreach($notes as $item)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card h-100">
            
                <div class="card-header">
                    <span class="text-muted">#{{ $item->id }} |</span>
                    <h3>{{ $item->noteTitle }}</h3>
                </div>
                <div class="card-body">
                    <p>{{ $item->noteContent }}</p>
                </div>
                <div class="card-footer d-flex gap-2 justify-content-end">
                    <a role="button" wire:click.prevent="edit({{ $item->id }})">
                        <i class="fa fa-edit"></i>
                    </a>
                    <span class="text-muted mx-2">|</span>
                    <a role="button">
                        <i class="fa fa-trash text-danger"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>



  <div wire:ignore.self 
    class="modal fade" 
    id="form" tabindex="-1" 
    aria-labelledby="exampleModalLabel" 
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            @if( $isEditing )
                <span>Atualizar Nota</span>
            @else 
                <span>Criar Nota</span>
            @endif
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form wire:submit.prevent="createNote">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="noteTitle" class="form-label">Título</label>
                    <input wire:model.defer="noteTitle"
                           type="text" 
                           class="form-control @error('noteTitle') is-invalid @enderror" 
                           id="noteTitle" 
                           placeholder="Informe o título da nota">
                    @error('noteTitle')
                    <div class="invalid-feedback">
                        O título da nota é grande demais!
                    </div>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label for="noteContent" class="form-label">Conteúdo</label>
                    <textarea wire:model.defer="noteContent"
                              class="form-control @error('noteContent') is-invalid @enderror" 
                              id="noteContent" 
                              placeholder="Informe o conteúdo da nota">
                    </textarea>
                    @error('noteContent')
                    <div class="invalid-feedback">
                        O conteúdo da nota é grande demais!
                    </div>
                    @enderror
                </div>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </form>
        
      </div>
    </div>
  </div>

  
</div>
