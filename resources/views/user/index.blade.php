@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL -------------------------------------->
<div class="modal fade" id="modalDatos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Registrar Usuario</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" id="formulario" method="POST" enctype="multipart/form-data" action="/usuarios/guardar">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Apellido</label>
                      <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Telefono</label>
                      <input type="number" class="form-control" id="telefono" name="telefono" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>DNI</label>
                      <input type="number" class="form-control" id="dni" name="dni" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputTipo">Tipo</label>
                      <select name="tipo" id="tipo" class="form-control select2" style="width: 100%">
                        <option value="A">Administrador</option>
                        <option value="T">Trabajador</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEstado">Estado</label>
                      <select name="estado" id="estado" class="form-control select2" style="width: 100%">
                        <option value="A">Activo</option>
                        <option value="I">Inactivo</option>
                      </select>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary btnCrear">Crear Usuario</button>
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
              <h3 class="card-title"><b> Gestión Usuario </b><button type="button" data-toggle="modal" data-target="#modalDatos" class="btn bg-gradient-primary ml-2 btnAgregar">Crear Usuario</button></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>DNI</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->dni }}</td>
                        <td><span class="btn btn-{{ Util::tipoColorUsuario($usuario->tipo) }}">{{ Util::tipoStringUsuario($usuario->tipo) }}</span></td>
                        <td><span class="btn btn-{{ Util::estadoColorUsuario($usuario->estado) }}">{{ Util::estadoStringUsuario($usuario->estado) }}</span></td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditar" type="button" data-id="{{ $usuario->id }}" data-toggle="modal" data-target="#modalDatos">
                            <i class="fas fa-pencil-alt">
                            </i>
                          </button>
                          <a class="btn btn-danger btn-sm" href="/usuarios/borrar/{{ $usuario->id }}" onclick="return confirm('¿Estás seguro de eliminar este evento?')">
                              <i class="fas fa-trash">
                              </i>
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
      let url = '/usuarios/editar/'+val_id;
      $.get(url,function(res){
        $('.tituloModal').html('Editar Usuario');
        $('.btnCrear').html('Actualizar');
        $('#nombre').val(res.nombre);
        $('#apellido').val(res.apellido);
        $('#email').val(res.email);
        $('#telefono').val(res.telefono);
        $('#tipo').val(res.tipo);
        $('#estado').val(res.estado);
        $('#dni').val(res.dni);
        $('#formulario').attr('action','/usuarios/actualizar/'+val_id);
        $('#modalDatos').modal('show');
      });
    });

    $('.btnAgregar').click(function(){
        let val_url = '/usuarios/guardar';
          $('.tituloModal').html('Registrar Usuario');
          $('.btnCrear').html('Agregar');
          $('#nombre').val('');
          $('#apellido').val('');
          $('#email').val('');
          $('#telefono').val('');
          $('#tipo option:first').prop('selected',true);
          $('#estado option:first').prop('selected',true);
          $('#dni').val('');
          $('#formulario').attr('action',val_url);
          $('#modalDatos').modal('show');
    })
    
    $(document).ready(function(){
      $('.btnCerrar').click(function(){
        $('#modalDatos').modal('hide');
      });
    });
  });
</script>
@endsection