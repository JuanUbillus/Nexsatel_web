@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL  DISTRITOS-------------------------------------->
<div class="modal fade" id="modalDistritos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Agregar Distritos</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario" action="/distritos/guardar">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn bg-gradient-primary float-right m-1 btnGuardar">Guardar</button>
                <button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right m-1 btnCerrar">Close</button>  
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------------------->
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN DISTRITOS </b><button type="button" data-toggle="modal" data-target="#modalDistritos" class="btn bg-gradient-primary ml-2 btnAgregar">Agregar</button></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($distritos as $distrito)
                    <tr>
                        <td>{{ $distrito->id }}</td>
                        <td>{{ $distrito->nombre }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditar" type="button" data-id="{{ $distrito->id }}" data-toggle="modal" data-target="#modalDistritos">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                          </button>
                          <a class="btn btn-danger btn-sm" href="/distritos/borrar/{{ $distrito->id }}" onclick="return confirm('¿Estás seguro de eliminar este evento?')">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                          </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
@endsection

@section('content_script')
<script>
  $(document).ready(function(){
    $('.btnEditar').click(function(){
      let val_id = $(this).data('id');
      let url = '/distritos/editar/'+val_id;
      $.get(url,function(res){
        $('.tituloModal').html('Editar Distrito');
        $('.btnGuardar').html('Actualizar');
        $('#nombre').val(res.nombre);
        $('#formulario').attr('action','/distritos/update/'+val_id);
        $('#modalDatos').modal('show');
      });
    });

    $('.btnAgregar').click(function(){
        let val_url = '/distritos/guardar';
          $('.tituloModal').html('Agregar Distrito');
          $('.btnGuardar').html('Agregar');
          $('#nombre').val('');
          $('#formulario').attr('action',val_url);
          $('#modalDatos').modal('show');
    })
    
  });
</script>
@endsection
