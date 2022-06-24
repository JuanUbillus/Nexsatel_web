@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">REDES SOCIALES</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('redes.update') }}" method="POST" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                    <label for="exampleInputPassword1">Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" value="{{ $whatsapp }}" required>
                  </div>  
              <div class="form-group">
                <label for="exampleInputEmail1">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{ $facebook }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{ $instagram }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{ $twitter }}" required>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection