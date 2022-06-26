@extends('layouts.apps')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3 id="contadorUsuario"></h3>
              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/usuarios" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3 id="contadorSolicitud"></h3>

              <p>Solicitudes Recibidas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/solicitudes" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">




      </div>
    </div>
  </section>
</div>
@endsection

@section('content_script')
<script type="text/javascript">
  $(document).ready(function(){
    contUsuario();
    contSolicitud();
  })
  function contUsuario(){
    $.get('/api/usuario/contador', function(res){
      $('#contadorUsuario').html(res);
    })
  }
  function contSolicitud(){
    $.get('/api/solicitud/contador', function(res){
      $('#contadorSolicitud').html(res);
    })
  }
</script>
@endsection