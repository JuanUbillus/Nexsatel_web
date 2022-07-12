@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Usuario</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/usuario/actualizar/{{ $usuario->id }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre }}">
              </div> 
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="{{ $usuario->apellido }}">
              </div>  
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $usuario->email }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{ $usuario->telefono }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto">
                    <label class="custom-file-label" for="exampleInputFile">Elegir Archivo</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Subir</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">DNI</label>
                <input type="text" class="form-control" name="dni" value="{{ $usuario->dni }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputTipo">Tipo</label>
                <select name="tipo" class="form-control select2" value="{{ $usuario->tipo }}" style="width: 100%">
                  <option value="{{ $usuario->tipo }}">{{ $usuario->tipo=='A'?'Administrador':'Trabajador' }}</option>
                  <option value="A">Administrador</option>
                  <option value="T">Trabajador</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEstado">Estado</label>
                <select name="estado" class="form-control select2" style="width: 100%">
                  <option value="{{ $usuario->estado }}">{{ $usuario->estado=='I'?'Inactivo':'Activo' }}</option>
                  <option value="A">Activo</option>
                  <option value="I">Inactivo</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Adicional</label>
                <input type="text" class="form-control" name="adicional" value="{{ $usuario->adicional }}">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection