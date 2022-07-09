@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL  VER-------------------------------------->
<div class="modal fade" id="ObservarTablas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Datos Completos</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
              <form role="form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Apellido</label>
                      <input type="text" class="form-control" id="apellido" name="apellido" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="email" name="email" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Distrito</label>
                      <input type="text" class="form-control" id="distrito" name="distrito" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Telefono</label>
                      <input type="text" class="form-control" id="telefono" name="telefono" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tipo de Documento</label>
                      <input type="text" class="form-control" id="tdocumento" name="tdocumento" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Número de Documento</label>
                      <input type="text" class="form-control" id="ndocumento" name="ndocumento" disabled>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Dirección</label>
                      <textarea class="form-control" rows="3" id="direccion" name="direccion" disabled></textarea>
                    </div>
                  </div>
                </div>                
              </form>
            </div>
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
              <h3 class="card-title"><b> GESTIÓN SOLICITUD </b><a class="btn bg-gradient-success ml-2" href="/solicitudes/export" ><i class="fas fa-file-excel mr-2"></i>Exportar</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap"  id="tablaSolicitudes">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Distrito</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $solicitud)
                    <tr>
                        <td>{{ $solicitud->nombre }}</td>
                        <td>{{ $solicitud->apellido }}</td>
                        <td>{{ $solicitud->ubigeo->distrito->nombre }}</td>
                        <td>{{ $solicitud->direccion }}</td>
                        <td>{{ $solicitud->telefono }}</td>
                        <td><span class="btn btn-{{ Util::estadoColorSolicitud($solicitud->estado) }}">{{ Util::estadoStringSolicitud($solicitud->estado) }}</span></td>
                        <td>
                          <a class="btn btn-{{ Util::estadoColorSolicitud($solicitud->estado) }} btn-sm btnAlert" href="{{ route('solicitudes.alert',$solicitud->id) }}">
                            <i class="fas fa-bell">
                            </i>
                          </a>
                          <button class="btn btn-primary btn-sm btnVerTabla" type="button" data-id="{{ $solicitud->id }}" data-bs-toggle="modal" data-bs-target="#ObservarTablas">
                            <i class="fas fa-eye">
                            </i>
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
<script type="text/javascript">

  $('#tablaSolicitudes').on('click', '.btnVerTabla', function(){
    let val_id = $(this).data('id');
    $.get('/solicitudes/ver/'+val_id,function(res){
      $('#nombre').val(res.nombre);
      $('#apellido').val(res.apellido);
      $('#distrito').val(res.distrito);
      $('#direccion').val(res.direccion);
      $('#telefono').val(res.telefono);
      $('#email').val(res.email);
      $('#tdocumento').val(res.tdocumento);
      $('#ndocumento').val(res.ndocumento);
      $('#ObservarTablas').modal('show');
    });
  });

  $(document).ready(function(){
    $('.btnCerrar').click(function(){
      $('#ObservarTablas').modal('hide');
    });
  });
</script>
@endsection
