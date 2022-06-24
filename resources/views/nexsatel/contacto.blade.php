@extends('layouts.appp')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ssss ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <h2>Contáctanos</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Dirección</h3>
            <p>{{ $estilos->direccion }}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>{{ $estilos->correo }}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Telefono</h3>
            <p>{{ $estilos->numero }}</p>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="{{ $estilos->ubicacion }}" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="/contacto/solicitud" method="POST" class="form-solicitud">
            @csrf
            <div class="row">
              <h3 class="title-contactanos">Déjanos tus datos y obtén las mejores promociones.</h3>
              <div class="col-md-6 form-group">
                <input type="text" name="nombre" class="form-control"  placeholder="Nombre" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" name="apellido" class="form-control"  placeholder="Apellido" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <select id="departamento" name="departamento" class="form-control" required>
                  <option value="">Departamento</option>
                  @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-6 form-group mt-3">
                <select id="provincia" name="provincia" class="form-control" required>
                    <option value="">Provincia</option>
                </select>
              </div>
              <div class="col-md-6 form-group mt-3">
                <select id="distrito" name="distrito" class="form-control"required>
                    <option value="">Distrito</option>
                </select>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" name="direccion" class="form-control"  placeholder="Dirección" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" name="telefono" class="form-control"  placeholder="Celular" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <select name="tdocumento" class="form-control" required>
                  <option value="" disabled selected hidden>Tipo de Documento</option>
                  <option value="DNI">DNI</option>
                  <option value="RUC">RUC</option>
                </select>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="ndocumento" placeholder="N° de documento" required>
              </div>
            </div>

            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script language="javascript">

    $("#departamento").on('change', function () {
        $("#departamento option:selected").each(function () {
            let elegido=$(this).val();
            $.get('/provincias/'+elegido, function(data){
                $("#provincia").html(data);
            });
        });
   })

    $("#provincia").on('change', function () {

        $("#provincia option:selected").each(function () {
            let elegido=$(this).val();
            $.get('/distritos/'+elegido, function(data){
                $("#distrito").html(data);
            });
        });
    });

</script>
@endsection
