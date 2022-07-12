@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL  EDITAR REDES SOCIALES-------------------------------------->
<div class="modal fade" id="modalDatos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Editar Redes Sociales</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" method="POST" id="formulario">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Whatsapp</label>
                      <textarea class="form-control" rows="2" id="whatsapp" name="whatsapp"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Facebook</label>
                      <textarea class="form-control" rows="2" id="facebook" name="facebook"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Instagram</label>
                      <textarea class="form-control" rows="2" id="instagram" name="instagram"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Twitter</label>
                      <textarea class="form-control" rows="2" id="twitter" name="twitter"></textarea>
                    </div>
                  </div>
                </div>                
                <div class="card-footer">
                  <button type="submit" class="btn bg-gradient-primary float-right m-1">Actualizar</button>
                </div>            
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
              <h3 class="card-title"><b> GESTIÓN REDES SOCIALES </b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Whatsapp</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $estilos->whatsapp }}</td>
                        <td>{{ $estilos->facebook }}</td>
                        <td>{{ $estilos->instagram }}</td>
                        <td>{{ $estilos->twitter }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditar" type="button" data-toggle="modal" data-target="#modalDatos">
                            <i class="fas fa-pencil-alt">
                            </i>
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
<script type="text/javascript">

  $('.btnEditar').click(function(){
    let url = '/redes/editar';
    $.get(url,function(res){
      $('#whatsapp').val(res.whatsapp);
      $('#facebook').val(res.facebook);
      $('#instagram').val(res.instagram);
      $('#twitter').val(res.twitter);
      $('#formulario').attr('action','/redes/update');
      $('#modalDatos').modal('show');
    });
  });

  $('.btnCerrar').click(function(){
    $('#modalDatos').modal('hide');
  });
</script>
@endsection
