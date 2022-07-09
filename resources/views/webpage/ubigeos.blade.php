@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL  UBIGEOS-------------------------------------->
<div class="modal fade" id="modalUbigeo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Agregar UBIGEOS</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario" action="/ubigeos/guardar">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Departamentos</label>
                        <select name="departamento" id="departamento" class="form-control select2" style="width: 100%">
                            <option value="" selected>Departamento</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Provincias</label>
                        <select name="provincia" id="provincia" class="form-control select2" style="width: 100%">
                            <option value="" selected>Provincia</option>
                            @foreach ($provincias as $provincia)
                                <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Distritos</label>
                        <select name="distrito" id="distrito" class="form-control select2" style="width: 100%">
                            <option value="" selected>Distritos</option>
                            @foreach ($distritos as $distrito)
                                <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>
                            @endforeach
                        </select>
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
              <h3 class="card-title"><b> GESTIÓN UBIGEOS </b><button type="button" data-toggle="modal" data-target="#modalUbigeo" class="btn bg-gradient-primary ml-2 btnAgregar">Agregar</button></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($ubigeos as $ubigeo)
                    <tr>
                        <td>{{ $ubigeo->id }}</td>
                        <td>{{ $ubigeo->departamento->nombre }}</td>
                        <td>{{ $ubigeo->provincia->nombre }}</td>
                        <td>{{ $ubigeo->distrito->nombre }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditar" type="button" data-id="{{ $ubigeo->id }}" data-toggle="modal" data-target="#modalUbigeo">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                          </button>
                          <a class="btn btn-danger btn-sm" href="/ubigeos/borrar/{{ $ubigeo->id }}" onclick="return confirm('¿Estás seguro de eliminar este evento?')">
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
      alert('sdasd0');
      let val_id = $(this).data('id');
      
      let url = '/ubigeos/editar/'+val_id;
      $.get(url,function(res){
        console.log(res);
        $('.tituloModal').html('Editar UBIGEO');
        $('.btnGuardar').html('Actualizar');
        $('#departamento').val(res.departamento);
        $('#provincia').val(res.provincia);
        $('#distrito').val(res.distrito);
        $('#formulario').attr('action','/ubigeos/update/'+val_id);
        $('#modalDatos').modal('show');
      });
    });

    $('.btnAgregar').click(function(){
        let val_url = '/ubigeos/guardar';
          $('.tituloModal').html('Agregar UBIGEO');
          $('.btnGuardar').html('Agregar');
          $('#departamento option:first').prop('selected',true);
          $('#provincia option:first').prop('selected',true);
          $('#distrito option:first').prop('selected',true);
          $('#formulario').attr('action',val_url);
          $('#modalDatos').modal('show');
    })
    
  });
</script>
@endsection
