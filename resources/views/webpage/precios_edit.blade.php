@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Precios</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('precios.update') }}" method="POST" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                    <label for="exampleInputPassword1">Titulo 1</label>
                    <input type="text" class="form-control" name="titulo1" value="{{ $titulo1 }}" required>
              </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Precio 1</label>
                    <input type="text" class="form-control" name="precio1" value="{{ $precio1 }}" required>
              </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Descripción 1</label>
                    <input type="text" class="form-control" name="desc_p1" value="{{ $desc_p1 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 1.2</label>
                   <input type="text" class="form-control" name="desc_p1_2" value="{{ $desc_p1_2 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 1.3</label>
                   <input type="text" class="form-control" name="desc_p1_3" value="{{ $desc_p1_3 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 1.4</label>
                   <input type="text" class="form-control" name="desc_p1_4" value="{{ $desc_p1_4 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 1.5</label>
                   <input type="text" class="form-control" name="desc_p1_5" value="{{ $desc_p1_5 }}" required>
              </div> 
              <div class="form-group">
                   <label for="exampleInputPassword1">Titulo 2</label>
                   <input type="text" class="form-control" name="titulo2" value="{{ $titulo2 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Precio 2</label>
                   <input type="text" class="form-control" name="precio2" value="{{ $precio2 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripción 2</label>
                   <input type="text" class="form-control" name="desc_p2" value="{{ $desc_p2 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 2.2</label>
                   <input type="text" class="form-control" name="desc_p2_2" value="{{ $desc_p2_2 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 2.3</label>
                   <input type="text" class="form-control" name="desc_p2_3" value="{{ $desc_p2_3 }}" required>
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Descripcion 2.4</label>
                   <input type="text" class="form-control" name="desc_p2_4" value="{{ $desc_p2_4 }}" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion 2.5</label>
                  <input type="text" class="form-control" name="desc_p2_5" value="{{ $desc_p2_5 }}" required>
              </div> 
              <div class="form-group">
                <label for="exampleInputPassword1">Titulo 3</label>
                <input type="text" class="form-control" name="titulo3" value="{{ $titulo3 }}" required>
           </div>
           <div class="form-group">
                <label for="exampleInputPassword1">Precio 3</label>
                <input type="text" class="form-control" name="precio3" value="{{ $precio3 }}" required>
           </div>
           <div class="form-group">
                <label for="exampleInputPassword1">Descripción 3</label>
                <input type="text" class="form-control" name="desc_p3" value="{{ $desc_p3 }}" required>
           </div>
           <div class="form-group">
                <label for="exampleInputPassword1">Descripcion 3.2</label>
                <input type="text" class="form-control" name="desc_p3_2" value="{{ $desc_p3_2 }}" required>
           </div>
           <div class="form-group">
                <label for="exampleInputPassword1">Descripcion 3.3</label>
                <input type="text" class="form-control" name="desc_p3_3" value="{{ $desc_p3_3 }}" required>
           </div>
           <div class="form-group">
                <label for="exampleInputPassword1">Descripcion 3.4</label>
                <input type="text" class="form-control" name="desc_p3_4" value="{{ $desc_p3_4 }}" required>
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Descripcion 3.5</label>
               <input type="text" class="form-control" name="desc_p3_5" value="{{ $desc_p3_5 }}" required>
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Tiempo</label>
               <input type="text" class="form-control" name="tiempo" value="{{ $tiempo }}" required>
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