@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Planes</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/tarifa/guardar" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputPassword1">Plan</label>
                  <input type="text" class="form-control" name="plan" placeholder="Plan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Precio</label>
                <input type="text" class="form-control" name="precio" placeholder="Precio" required>
              </div>  
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 1</label>
                <input type="text" class="form-control" name="descripcion1" placeholder="Descripcion 1" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 2</label>
                <input type="text" class="form-control" name="descripcion2" placeholder="Descripcion 2" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 3</label>
                <input type="text" class="form-control" name="descripcion3" placeholder="Descripcion 3" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion 4</label>
                <input type="text" class="form-control" name="descripcion4" placeholder="Descripcion 4" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Crear Plan</button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection