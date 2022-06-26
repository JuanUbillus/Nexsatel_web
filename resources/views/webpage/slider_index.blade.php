@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL EDITAR LOGO-------------------------------------->
<div class="modal fade" id="modalDatosSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Sliders</h3>
                <button data-dismiss="modal" aria-label="close" class="close btnCerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Slider 1</label>
                      <div>
                        <img src="" alt="" id="sliders1"  width="120px" class="img-thumbnail mx-auto d-block">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="slider1" name="slider1">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Subir</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Slider 2</label>
                      <div class="">
                        <img src="" alt="" id="sliders2"  width="120px" class="img-thumbnail mx-auto d-block">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="slider2" name="slider2">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Subir</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Slider 3</label>
                      <div class="">
                        <img src="" alt="" id="sliders3"  width="120px" class="img-thumbnail mx-auto d-block">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="slider3" name="slider3">
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
              <h3 class="card-title"><b> GESTIÓN SLIDERS </b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Slider 1</th>
                    <th>Slider 2</th>
                    <th>Slider 3</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ Storage::url($slider1)}}" alt=""  class="img-circle img-fluid" width=90px></td>
                        <td><img src="{{ Storage::url($slider2)}}" alt=""  class="img-circle img-fluid" width=90px></td>
                        <td><img src="{{ Storage::url($slider3)}}" alt=""  class="img-circle img-fluid" width=90px></td>
                        <td class="project-actions">
                          <button class="btn btn-info btn-sm btnEditarSlider" type="button" data-toggle="modal" data-target="#modalDatosSlider">
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
    $('.btnEditarSlider').click(function(){
      let val_id = $(this).data('id');
      let url = '/sliders/editar/'+val_id;
      $.get(url,function(res){
        $('#sliders1').attr('src', res.slider1);
        $('#sliders2').attr('src', res.slider2);
        $('#sliders3').attr('src', res.slider3);
        $('#formulario').attr('action','/sliders/update/'+val_id);
        $('#modalDatos').modal('show');
      });
    });
  });
</script>
@endsection