@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL EDITAR CARACTERISTICAS-------------------------------------->
<div class="modal fade" id="modalCaracteristicas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Caracteristicas</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titulo 1</label>
                        <input type="text" class="form-control" name="titulo1" id="titulo1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripción 1</label>
                        <input type="text" class="form-control" name="descripcion1" id="descripcion1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titulo 2 </label>
                        <input type="text" class="form-control" name="titulo2" id="titulo2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripción 2</label>
                        <input type="text" class="form-control" name="descripcion2" id="descripcion2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Titulo 3 </label>
                      <input type="text" class="form-control" name="titulo3" id="titulo3">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descripción 3</label>
                      <input type="text" class="form-control" name="descripcion3" id="descripcion3">
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
              <h3 class="card-title"><b> GESTIÓN CARACTERÍSTICAS </b></h3>
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
                    <th>Titulo 1</th>
                    <th>Descripción 1</th>
                    <th>Titulo 2</th>
                    <th>Descripción 2</th>
                    <th>Titulo 3</th>
                    <th>Descripción 3</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($caracteristicas as $caracteristica)
                    <tr>
                        <td>{{ $caracteristica->titulo1 }}</td>
                        <td>{{ $caracteristica->descripcion1 }}</td>
                        <td>{{ $caracteristica->titulo2 }}</td>
                        <td>{{ $caracteristica->descripcion2 }}</td>
                        <td>{{ $caracteristica->titulo3 }}</td>
                        <td>{{ $caracteristica->descripcion3 }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditarCaracteristicas" type="button" data-id="{{ $caracteristica->id }}" data-toggle="modal" data-target="#modalCaracteristicas">
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
    $('.btnEditarCaracteristicas').click(function(){
      let val_id = $(this).data('id');
      let url = '/caracteristicas/editar/'+val_id;
      $.get(url,function(res){
        console.log(res);
        $('#titulo1').val(res.titulo1);
        $('#descripcion1').val(res.descripcion1);
        $('#titulo2').val(res.titulo2);
        $('#descripcion2').val(res.descripcion2);
        $('#titulo3').val(res.titulo3);
        $('#descripcion3').val(res.descripcion3);
        $('#formulario').attr('action','/caracteristicas/update/'+val_id);
        $('#modalDatos').modal('show');
      });
    });
  });
</script>
@endsection