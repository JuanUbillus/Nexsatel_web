<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $estilos->nombre_empresa }}</title>
  <meta content="Somos una empresa peruana dedica a las telecomunicaciones, especializada en ofrecer diversos soluciones, tales como ofrecer el servicio de internet dedicado, Internet en casa, interconexión de sedes lógicas y físicas utilizando la tecnología Fibra Óptica
  contando con profesionales altamente capacitados en diversas áreas, dedicado integradamente a dar solución dentro de la empresa, con más 10 años de experiencia en el mercado." name="description">
  <meta content="Nexsatel, nexsaweb, nexatel, nexsatel, internet, fibra optica" name="keywords">

  <!-- Favicons -->
  <link href="{{ Storage::url($estilos->icono) }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/fontello.css">
  <link rel="stylesheet" href="/css/style.css?v=1.2">
  @yield('links')

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><span>{{ $estilos->correo }}</span></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $estilos->numero }}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{ $estilos->facebook }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $estilos->twitter }}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{ $estilos->instagram }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="/"><img width="160" height="70" src="{{ Storage::url($estilos->logo) }}"  alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ route('index') }}">Inicio</a></li>
          <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
          <li><a href="{{ route('pagos') }}">Formas de Pago</a></li>
           <li class="dropdown"><a href="#"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('fibraoptica') }}">Internet Fibra Óptica</a></li>
            </ul>
          </li>
          <li><a href="{{ route('contacto') }}">Contáctanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

  <!--  <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('nosotros') }}">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('pagos') }}">Formas de Pago</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('fibraoptica') }}">Internet Fibra Óptica</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacto</h4>
            <p>
              Mz K  Lote 8 Villa Alejandro<br>
              Segunda Etapa, Lurín - Perú
               <br><br>
              <strong>Telefono:</strong> {{ $estilos->numero }}<br>
              <strong>Email:</strong> {{ $estilos->correo }}<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Sobre empresa</h3>
            <div class="social-links mt-3">
              <a href="{{ $estilos->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $estilos->twitter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ $estilos->instagram }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Nexsatel</span></strong>. Derechos Reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/jquery-3.6.0.min.js"></script>
  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/particles.min.js"></script>
  <script src="/assets/js/app.js"></script>
  @yield('script')
</body>

</html>