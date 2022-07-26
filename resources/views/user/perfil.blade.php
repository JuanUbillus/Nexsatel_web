@extends('layouts.apps')
@section('content')

<!------------------------------------ MODAL  CAMBIAR CONTRASEÑA-------------------------------------->
<div class="modal fade" id="modalContrasena" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cambiar Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form-pass" method="POST" action="/usuarios/update/password">
            @csrf
            <div class="modal-body">
                <div id="respuesta" class="text-center text-danger"></div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                  </div>
                  <input id="oldpass" name="oldpass" type="password" class="form-control" placeholder="Ingrese password actual" required>
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input id="newpass" name="newpass" type="texto" class="form-control" placeholder="Ingrese password nuevo" required>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary btnCerrar" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn bg-gradient-primary btnGuardarPass">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<!---------------------------------------------------------------------------------------------------------------------------------------->

<!------------------------------------ MODAL  CAMBIAR FOTO-------------------------------------->
<div class="modal fade" id="cambiophoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cambiar Imagen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body">
                <div class="text-center">
                    <img id="foto" src="{{ Storage::url($user->foto)}}" class="profile-user-img img-fluid img-circle">
                </div>
                <div class="text-center">
                    <b>
                        {{ $user->nombre }}
                    </b>
                </div>
                <form method="POST" id="form-foto" enctype="multipart/form-data" action="/usuarios/update/foto">
                    @csrf
                    <div class="input-group mb-3 ml-5 mt-2">
                        <input type="file" name="foto" id="foto" class="input-group">
                    </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn bg-gradient-primary">Cambiar</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------------------->

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Datos Personales</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img src="{{ Storage::url($user->foto)}}" class="profile-user-img img-fluid img-circle" width="80px">
                                </div>
                                <div class="text-center mt-1">
                                    <button type='button' data-toggle="modal" data-target="#cambiophoto" class="btn btn-primary btn-sm">Cambiar Imagen</button>
                                </div>
                                <input type="hidden" value="#">
                                <h3 class="profile-username text-center text-success">{{ $user->nombre }}</h3>
                                <p class="text-muted text-center">{{ $user->apellido }}</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b style="color:#0B7300">DNI</b><a class="float-right">{{ $user->dni }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b style="color:#0B7300">Tipo Usuario</b>
                                        <spam class="float-right">{{ Auth::user()->tipo == 'A'?'Administrador':'Trabajador' }}</spam>
                                    </li>
                                    <button data-toggle="modal" data-target="#modalContrasena" type="button" class="btn btn-block btn-outline-warning btn-sm">Cambiar Password</button>
                                </ul>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Sobre mi</h3>
                            </div>
                            <div class="card-body">
                                <strong style="color:#0B7300">
                                    <i class="fas fa-phone-volume mr-1"></i>Telefono
                                </strong>
                                <p class="text-muted">{{ $user->telefono }}</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-map-marker-alt mr-1"></i>Dirección
                                </strong>
                                <p class="text-muted">{{ $user->direccion }}</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-at mr-1"></i>Correo
                                </strong>
                                <p class="text-muted">{{ $user->email }}</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-pencil-alt mr-1"></i>Informacion Adicional
                                </strong>
                                <p class="text-muted">{{ $user->adicional }}</p>
                                <button type="submit" class="btn btn-block bg-gradient-danger btnEditar">Editar</button>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">¡click en boton si desea editar!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Editar Datos Personales</h3>
                            </div>
                            <form id='formPerfilEdit' class="form-horizontal" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-10">
                                            <input type="number" id="telefono" name="telefono" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Residencia" class="col-sm-2 col-form-label">Dirección</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="direccion" name="direccion" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">correo</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="adicional" class="col-sm-2 col-form-label">Informacion Adicional</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="adicional" name="adicional" cols="30" rows="16"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10 float-right">
                                            <button class="btn btn-block btn-outline-success" id="btnGuardar" style="display: none">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</div>
@endsection

@section('content_script')
<script>
  $(document).ready(function(){
    $('.btnEditar').click(function(){
      let val_id = $(this).data('id');
      let url = '/usuarios/editar/perfil/'+val_id;
      $.get(url,function(res){
        $('#telefono').val(res.telefono);
        $('#direccion').val(res.direccion);
        $('#email').val(res.email);
        $('#adicional').val(res.adicional);
        $('#btnGuardar').css('display', 'block');
        $('#formPerfilEdit').attr('action','/usuarios/actualizar/perfil/'+val_id);
        });
    });

    $('.btnGuardarPass').click(function(){
        let val_oldpass = $('#oldpass').val();
        let val_newpass = $('#newpass').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        $.post({
            data: {
                oldpass: val_oldpass,
                newpass: val_newpass,
            },
            url:   '/usuarios/update/password',
            type:  'POST',
           // dataType: 'json',
            //cache: false,
            //processData: false,
            //contentType: false,
           beforeSend: function(){
                $('.btnGuardarPass').css('opacity', 0.6).prop('disabled', true).val('Enviando...');
                $('#respuesta').html('Comprobando...');
            },
            success:  function (response) {
                $('.btnGuardarPass').css('opacity', 1).prop('disabled', false).val('Guardar');
                if(response==='error'){
                    $('#respuesta').html('');
                    toastr.warning('La contraseña no coincide','Error',{"progressBar": true});
                }else{
                    $('#oldpass').val('');
                    $('#newpass').val('');
                    $('#respuesta').html(''); 
                    $('.btnCerrar').click();
                    toastr.success('Se ha actualizado la contraseña','Contraseña Actualizada',{"progressBar": true});
                }
            }
        });
    });
  });
</script>
@endsection