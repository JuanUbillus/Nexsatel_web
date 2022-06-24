@extends('layouts.appp')
@section('content')
<a class="btn-wsp"  target="_blank" href="https://wa.me/+51{{ $estilos->whatsapp }}?text=Hola Nexsatel!!! quería informe sobre su servicio">
  <i class="icon-whatsapp"></i>
</a>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="{{ Storage::url($estilos->slider1)}}" class="img-fluid" alt="slider1">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="{{ Storage::url($estilos->slider2)}}" class="img-fluid" alt="slider2">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="{{ Storage::url($estilos->slider3)}}" class="img-fluid" alt="slider3">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section>

  <main id="main" class="main-beneficios">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="section-title">
        <h2>Beneficios</h2>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-shield-lock"></i>
              <h3><a href="">{{ $caracteristicas->titulo1 }}</a></h3>
              <p>{{ $caracteristicas->descripcion1 }}.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="">{{ $caracteristicas->titulo2 }}</a></h3>
              <p>{{ $caracteristicas->descripcion2 }}.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-cloud-check"></i>
              <h3><a href="">{{ $caracteristicas->titulo3 }}</a></h3>
              <p>{{ $caracteristicas->descripcion3 }}.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Plans Section ======= -->
    <section id="pricing" class="pricing">
      <div class="section-title">
        <h2>Planes</h2>
    </div>
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 box">
            <h3>{{ $precios->titulo1 }}</h3>
            <h4>{{ $precios->plan1 }}<span>{{ $precios->mb }}</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p1 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p1_2 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p1_3 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p1_4 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p1_5 }}</li>
            </ul>
            <a class="buy-btn"  target="_blank" href="https://wa.me/+51{{ $estilos->whatsapp }}?text=Hola Nexsatel!!! quería informe sobre su servicio">
              Ver Más
            </a>
          </div>
          <div class="col-lg-4 box featured">
            <h3>{{ $precios->titulo2 }}</h3>
            <h4>{{ $precios->plan2 }}<span>{{ $precios->mb }}</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p2 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p2_2 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p2_3 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p2_4 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p2_5 }}</li>
            </ul>
            <a class="buy-btn"  target="_blank" href="https://wa.me/+51{{ $estilos->whatsapp }}?text=Hola Nexsatel!!! quería informe sobre su servicio">
              Ver Más
            </a>
          </div>
          <div class="col-lg-4 box">
            <h3>{{ $precios->titulo3 }}</h3>
            <h4>{{ $precios->plan3 }}<span>{{ $precios->mb }}</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p3 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p3_2 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p3_3 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p3_4 }}</li>
              <li><i class="bx bx-check"></i> {{ $precios->desc_p3_5 }}</li>
            </ul>
            <a class="buy-btn"  target="_blank" href="https://wa.me/+51{{ $estilos->whatsapp }}?text=Hola Nexsatel!!! quería informe sobre su servicio">
              Ver Más
            </a>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contrata Section ======= -->
    <section>
      <div class="container">
        <div class="row text-center justify-content-center box-call">
          <div class="bg-nexsatel d-flex col-xs-11 col-sm-11 col-md-9">
              <div class="py-xs-0 px-xs-0 py-3 px-0 br-20 box-nexsatel">
                  <div>
                      <p class="text-white text-big-migra">¡Cámbiate a NEXSATEL!</p><br>
                      <p class="text-white text-normal-migra">Comunícate <strong>ahora</strong> con un asesor de <br>
                          ventas llamando al:</p>
                      <a href="https://wa.me/+51{{ $estilos->whatsapp }}?text=Hola Nexsatel!!! quería informe sobre su servicio" target="_blank"
                          class="bg-white tel br-10 py-xs-2 px-xs-4 py-3 px-4 d-flex align-items-center justify-content-center">
                          <img style="width: 47px" src="assets/img/phone-call.png" alt="phone">
                          <p>
                              <span class="text-medium d-block mb-xs-0">965 780 922</span>
                          </p>
                      </a>
                  </div>
                  <img class="men d-xs-none" src="assets/img/persona2.png" alt="phone">
              </div>  
          </div>
        </div>
      </div>
    </section><!-- End Contrata Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Marcas</h2>
          <p>Nuestra empresa se preocupa por garantizar una excelente conectividad y por ello contamos con marcas reconocidas en el mercado de las telecomunicaciones.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ( $empresas as $empresa )
              <div class="swiper-slide"><img src="{{ Storage::url( $empresa->Imagen ) }}" class="img-fluid" alt=""></div>
            @endforeach
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
@endsection
