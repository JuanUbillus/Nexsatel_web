@extends('layouts.appp')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>Planes</h2>
      </div>

    </section><!-- End Breadcrumbs -->
    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          @foreach ($tarifas as $tarifa)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <h4><a href="{{ route('contacto') }}">{{ $tarifa->plan }}</a></h4>
              <h3>S/ {{ $tarifa->precio }}</h3>
              <ul>
                <li><i class="bx bx-check"></i> {{ $tarifa->descripcion1 }}</li>
                <li><i class="bx bx-check"></i> {{ $tarifa->descripcion2 }}</li>
                <li><i class="bx bx-check"></i> {{ $tarifa->descripcion3 }}</li>
                <li><i class="bx bx-check"></i> {{ $tarifa->descripcion4 }}</li>
              </ul>
              <a href="{{ route('contacto') }}" class="plan-btn">Adquirir</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
  </main><!-- End #main -->
@endsection
