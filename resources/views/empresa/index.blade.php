@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL CREAR EMPRESA-------------------------------------->
<div class="modal fade" id="modalDatos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Crear Empresa</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario" enctype="multipart/form-data" action="/empresa/guardar">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
                    </div>
                    <div class="form-group m-3">
                      <img src="" alt="" id="avatar"  width="120px" style="display: none" class="img-thumbnail mx-auto d-block">
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="input-group" id="imagenes" name="imagenes">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Direcci??n</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direcci??n">
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
              <h3 class="card-title"><b> GESTI??N EMPRESAS </b><button type="button" data-toggle="modal" data-target="#modalDatos" class="btn bg-gradient-primary ml-2 btnAgregar">Crear Empresa</button></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Imagen</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->id }}</td>
                        <td>{{ $empresa->Nombre }}</td>
                        <td>{{ $empresa->Correo }}</td>
                        <td><img src="{{ Storage::url($empresa->Imagen)}}" alt=""  width=80px></td>
                        <td>{{ $empresa->Telefono }}</td>
                        <td>{{ $empresa->Direccion }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditar" type="button" data-id="{{ $empresa->id }}" data-toggle="modal" data-target="#modalDatos">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </button>
                          <a class="btn btn-danger btn-sm" href="/empresa/borrar/{{ $empresa->id }}" onclick="return confirm('??Est??s seguro de eliminar este evento?')">
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
      let url = '/empresa/editar/'+val_id;
      $.get(url,function(res){
        $('.tituloModal').html('Editar Empresa');
        $('.btnGuardar').html('Actualizar');
        $('#nombre').val(res.empresa.Nombre);
        $('#correo').val(res.empresa.Correo);
        $('#avatar').css('display','block');
        $('#avatar').attr('src', res.imagen);
        $('#telefono').val(res.empresa.Telefono);
        $('#direccion').val(res.empresa.Direccion);
        $('#formulario').attr('action','/empresa/actualizar/'+val_id);
        $('#modalDatos').modal('show');
      });
    });

    $('.btnAgregar').click(function(){
      let val_url = '/empresa/guardar';
        $('.tituloModal').html('Registrar Empresa');
        $('.btnGuardar').html('Agregar');
        $('#nombre').val('');
        $('#correo').val('');
        $('#avatar').css('display', 'none');
        $('#avatar').attr('src', '');
        $('#telefono').val('');
        $('#direccion').val('');
        $('#formulario').attr('action',val_url);
        $('#modalDatos').modal('show');
    })

    $('.btnCerrar').click(function(){
      $('#modalDatos').modal('hide');
    });
  });
</script>
@endsection