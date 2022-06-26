@extends('layouts.appp')
@section('content')

<!-- ======= Hero Section ======= -->
  <section class="d-flex flex-column justify-content-center align-items-center form-pago">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>CONOCE DÓNDE PAGAR TUS <span>RECIBOS</span></h1>
      <h2>DE MANERA FÁCIL Y RÁPIDA</h2>
    </div>
  </section><!-- End Hero -->

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
  <div class="container">

    <div class="section-title mt-5">
      <h2>¿DÓNDE PAGAR TU RECIBO?</h2>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter=".filter-agents" class="agente">Agentes</li>
          <li data-filter=".filter-line" class="linea">En línea</li>
        </ul>
      </div>
    </div>

    <div class="row menu-container">

      <div class="col-lg-6 menu-item filter-agents">
        <div class="menu-content">
          <a class="titulo" href="#">Agentes Afiliados:</a>
        </div>
        <div class="menu-details mt-2">
          <ul class="lista">
            <li><i class="bi bi-check-circle"></i> Acércate a ventanilla e indica que deseas realizar el pago de tu servicio de Internet.</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-agents">
        <div class="menu-content imagen">
          <img src="assets/img/bank.jpg" class="img-fluid" alt="">
        </div>
      </div>
      <!-- ======= Menu bancos ======= -->
      <div class="row" id="agents" style="display:block">
        <div class="col-12 col-md-6 my-auto">
          <div class="row justify-content-center banks_logos mt-50">
            <div class="col-6 col-md-4 mb-2 px-1 text-center">
              <div class="bg-lead br-10 box-logo-bancos">
                <div class="logo-banks">
                  <img src="assets/img/bcp.png" class="img-fluid" alt="bcp">
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 mb-2 px-1 text-center">
              <div class="bg-lead br-10 box-logo-bancos">
                <div class="logo-banks interbank">
                  <img src="assets/img/interbank.png" class="img-fluid" alt="bcp">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Menu Section -->
@endsection
@section('script')
<script>
  $(document).ready(function(){
    $('.agente').click(function(){
      $('.titulo').html('Agentes:');
      $('.lista').html('<li><i class="bi bi-check-circle"></i> Acércate a ventanilla e indica que deseas realizar el pago de tu servicio de Internet.</li>');
      $('.imagen').html('<img src="assets/img/agente.png" class="img-fluid" alt="">');
      document.getElementById('agents').style.display='block';
    });
    $('.linea').click(function(){
      $('.titulo').html('En línea:');
      $('.lista').html('<li><i class="bi bi-check-circle"></i> Acércate a ventanilla e indica que deseas realizar el pago de tu servicio de Internet.</li>'+
                      '<li><i class="bi bi-check-circle"></i> Brinda tu código de abonado, ubicado en la parte superior derecha de tu recibo (no consideres '+
                      'los 00 de la izquierda). De ser necesario agregar un código previo al de <br> abonado te lo indicamos líneas abajo.</li>');
      $('.imagen').html('<img src="assets/img/linea.png" class="img-fluid" alt="">');
      document.getElementById('agents').style.display='none';
    });
});
</script>
@endsection