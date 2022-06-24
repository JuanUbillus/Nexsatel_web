@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL EDITAR CABECERA-------------------------------------->
<div class="modal fade" id="modalCabecera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Cabecera</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telefono</label>
                        <input type="text" class="form-control" name="numero" id="numero" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ubicación</label>
                        <input type="text" class="form-control" name="ubicacion" id="ubicacion">
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn bg-gradient-primary float-right m-1">Guardar</button>
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
              <h3 class="card-title"><b> GESTIÓN CABECERA </b></h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($estilos as $estilo)
                    <tr>
                        <td>{{ $estilo->correo }}</td>
                        <td>{{ $estilo->numero }}</td>
                        <td>{{ $estilo->direccion }}</td>
                        <td>{{ $estilo->ubicacion }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditarCabecera" type="button" data-id="{{ $estilo->id }}" data-toggle="modal" data-target="#modalCabecera">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </button>
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
    $('.btnEditarCabecera').click(function(){
      let val_id = $(this).data('id');
      let url = '/estilo/cabecera/editar/'+val_id;
      $.get(url,function(res){
        console.log(res);
        $('#correo').val(res.correo);
        $('#numero').val(res.numero);
        $('#direccion').val(res.direccion);
        $('#ubicacion').val(res.ubicacion);
        $('#formulario').attr('action','/estilo/cabecera/update/'+val_id);
        $('#modalDatos').modal('show');
      });
    });
  });
</script>
@endsection