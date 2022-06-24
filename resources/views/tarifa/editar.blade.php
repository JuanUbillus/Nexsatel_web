@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tarifas</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/tarifa/actualizar/{{ $tarifa->id }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                    <label for="exampleInputPassword1">Plan</label>
                    <input type="text" class="form-control" name="plan" value="{{ $tarifa->plan }}" required>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" value="{{ $tarifa->precio }}" name="precio" >
              </div>  
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 1</label>
                <input type="text" class="form-control" name="descripcion1" value="{{ $tarifa->descripcion1 }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 2</label>
                <input type="text" class="form-control" name="descripcion2" value="{{ $tarifa->descripcion2 }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 3</label>
                <input type="text" class="form-control" name="descripcion3" value="{{ $tarifa->descripcion3 }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 4</label>
                <input type="text" class="form-control" name="descripcion4" value="{{ $tarifa->descripcion4 }}" required>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-success">Actualizar Tarifa</button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection