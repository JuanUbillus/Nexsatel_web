@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL  EDITAR PRECIOS-------------------------------------->
<div class="modal fade" id="modalDatos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title tituloModal">Editar Precios</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" method="POST" id="formulario">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Título 1</label>
                      <input type="text" class="form-control" id="titulo1" name="titulo1">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Plan 1</label>
                      <input type="text" class="form-control" id="plan1" name="plan1">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Detalle</label>
                      <input type="text" class="form-control" id="mb" name="mb">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 1</label>
                      <input type="text" class="form-control" id="desc_p1" name="desc_p1">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 2</label>
                      <input type="text" class="form-control" id="desc_p1_2" name="desc_p1_2">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 3</label>
                      <input type="text" class="form-control" id="desc_p1_3" name="desc_p1_3">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 4</label>
                      <input type="text" class="form-control" id="desc_p1_4" name="desc_p1_4">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 5</label>
                      <input type="text" class="form-control" id="desc_p1_5" name="desc_p1_5">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Título 2</label>
                      <input type="text" class="form-control" id="titulo2" name="titulo2">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Plan 2</label>
                      <input type="text" class="form-control" id="plan2" name="plan2">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 2</label>
                      <input type="text" class="form-control" id="desc_p2" name="desc_p2">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 2.2</label>
                      <input type="text" class="form-control" id="desc_p2_2" name="desc_p2_2">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 2.3</label>
                      <input type="text" class="form-control" id="desc_p2_3" name="desc_p2_3">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 2.4</label>
                      <input type="text" class="form-control" id="desc_p2_4" name="desc_p2_4">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 2.5</label>
                      <input type="text" class="form-control" id="desc_p2_5" name="desc_p2_5">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Título 3</label>
                      <input type="text" class="form-control" id="titulo3" name="titulo3">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Plan 3</label>
                      <input type="text" class="form-control" id="plan3" name="plan3">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 3</label>
                      <input type="text" class="form-control" id="desc_p3" name="desc_p3">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 3.2</label>
                      <input type="text" class="form-control" id="desc_p3_2" name="desc_p3_2">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 3.3</label>
                      <input type="text" class="form-control" id="desc_p3_3" name="desc_p3_3">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 3.4</label>
                      <input type="text" class="form-control" id="desc_p3_4" name="desc_p3_4">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Descripción 3.5</label>
                      <input type="text" class="form-control" id="desc_p3_5" name="desc_p3_5">
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
              <h3 class="card-title"><b> GESTIÓN PRECIOS PRINCIPAL </b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Titulo 1</th>
                    <th>Plan 1</th>
                    <th>Descripcion 1</th>
                    <th>Descripcion 1.2</th>
                    <th>Descripcion 1.3</th>
                    <th>Descripcion 1.4</th>
                    <th>Descripcion 1.5</th>
                    <th>Titulo 2</th>
                    <th>Plan 2</th>
                    <th>Descripcion 2</th>
                    <th>Descripcion 2.2</th>
                    <th>Descripcion 2.3</th>
                    <th>Descripcion 2.4</th>
                    <th>Descripcion 2.5</th>
                    <th>Titulo 3</th>
                    <th>Plan 3</th>
                    <th>Descripcion 3</th>
                    <th>Descripcion 3.2</th>
                    <th>Descripcion 3.3</th>
                    <th>Descripcion 3.4</th>
                    <th>Descripcion 3.5</th>
                    <th>Mb</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($precios as $precio)
                    <tr>
                        <td>{{ $precio->titulo1 }}</td>
                        <td>{{ $precio->plan1 }}</td>
                        <td>{{ $precio->desc_p1 }}</td>
                        <td>{{ $precio->desc_p1_2 }}</td>
                        <td>{{ $precio->desc_p1_3 }}</td>
                        <td>{{ $precio->desc_p1_4 }}</td>
                        <td>{{ $precio->desc_p1_5 }}</td>
                        <td>{{ $precio->titulo2 }}</td>
                        <td>{{ $precio->plan2 }}</td>
                        <td>{{ $precio->desc_p2 }}</td>
                        <td>{{ $precio->desc_p2_2 }}</td>
                        <td>{{ $precio->desc_p2_3 }}</td>
                        <td>{{ $precio->desc_p2_4 }}</td>
                        <td>{{ $precio->desc_p2_5 }}</td>
                        <td>{{ $precio->titulo3 }}</td>
                        <td>{{ $precio->plan3 }}</td>
                        <td>{{ $precio->desc_p3 }}</td>
                        <td>{{ $precio->desc_p3_2 }}</td>
                        <td>{{ $precio->desc_p3_3 }}</td>
                        <td>{{ $precio->desc_p3_4 }}</td>
                        <td>{{ $precio->desc_p3_5 }}</td>
                        <td>{{ $precio->mb }}</td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditar" type="button" data-toggle="modal" data-target="#modalDatos">
                              <i class="fas fa-pencil-alt">
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

  $('.btnEditar').click(function(){
    let url = '/precios/editar';
    $.get(url,function(res){
      $('#titulo1').val(res.titulo1);
      $('#plan1').val(res.plan1);
      $('#mb').val(res.mb);
      $('#desc_p1').val(res.desc_p1);
      $('#desc_p1_2').val(res.desc_p1_2);
      $('#desc_p1_3').val(res.desc_p1_3);
      $('#desc_p1_4').val(res.desc_p1_4);
      $('#desc_p1_5').val(res.desc_p1_5);
      $('#titulo2').val(res.titulo2);
      $('#plan2').val(res.plan2);
      $('#desc_p2').val(res.desc_p2);
      $('#desc_p2_2').val(res.desc_p2_2);
      $('#desc_p2_3').val(res.desc_p2_3);
      $('#desc_p2_4').val(res.desc_p2_4);
      $('#desc_p2_5').val(res.desc_p2_5);
      $('#titulo3').val(res.titulo3);
      $('#plan3').val(res.plan3);
      $('#desc_p3').val(res.desc_p3);
      $('#desc_p3_2').val(res.desc_p3_2);
      $('#desc_p3_3').val(res.desc_p3_3);
      $('#desc_p3_4').val(res.desc_p3_4);
      $('#desc_p3_5').val(res.desc_p3_5);
      $('#formulario').attr('action','/precios/update');
      $('#modalDatos').modal('show');
    });
  });

  $('.btnCerrar').click(function(){
    $('#modalDatos').modal('hide');
  });
</script>
@endsection