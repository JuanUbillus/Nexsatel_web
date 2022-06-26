@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL EDITAR LOGO-------------------------------------->
<div class="modal fade" id="modalDatosLogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Logo</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre Empresa</label>
                        <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Logo</label>
                      <div>
                        <img src="" alt="" id="logos"  width="120px" class="img-thumbnail mx-auto d-block">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="logo" name="logo">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Subir</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Icono</label>
                      <div class="">
                        <img src="" alt="" id="iconos"  width="40px" class="img-circle mx-auto d-block">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="icono" name="icono">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Subir</span>
                        </div>
                      </div>
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
              <h3 class="card-title"><b> GESTIÓN LOGO </b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Nombre Empresa</th>
                    <th>Logo</th>
                    <th>Icono</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $nombre_empresa }}</td>
                        <td><img src="{{ Storage::url($logo)}}" alt=""  width=80px></td>
                        <td><img src="{{ Storage::url($icono)}}" alt=""  width=40px></td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditarLogo" type="button" data-toggle="modal" data-target="#modalDatosLogo">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </button>
                        </td>
                    </tr>
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
    $('.btnEditarLogo').click(function(){
      let val_id = $(this).data('id');
      let url = '/estilo/logo/editar/'+val_id;
      $.get(url,function(res){
        $('#nombre_empresa').val(res.nombre_empresa);
        $('#logos').attr('src', res.logo);
        $('#iconos').attr('src', res.icono);
        $('#formulario').attr('action','/estilo/logo/update/'+val_id);
        $('#modalDatos').modal('show');
      });
    });
  });
</script>
@endsection