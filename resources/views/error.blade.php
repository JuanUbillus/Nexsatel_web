@extends('layouts.appp')

@section('links')
<style>
  h1{
    font-size: 180px;
    font-weight: 700;
    color: #4154f1;
    margin-bottom: 0;
    line-height: 150px;
    font-family: "Nunito", sans-serif;
  }
  .error-404 h2{
    font-size: 24px;
    font-weight: 700;
    color: #012970;
    margin-bottom: 30px;
    font-family: "Nunito", sans-serif;
  }
  .error-404 .btn{
    background: #51678f;
    color: #fff;
    padding: 8px 30px;
  }
  .py-5 {
    padding-top: 3rem!important;
    padding-bottom: 3rem!important;
  }
  .img-fluid {
    max-width: 100%;
    height: auto;
  }
  .error-404 {
    padding: 30px;
  }
</style>
@endsection

@section('content')

<div class="container">

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h1>404</h1>
      <h2>La página que buscas no existe.</h2>
      <a class="btn" href="/">Volver al Inicio</a>
      <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
    </section>

  </div>


@endsection