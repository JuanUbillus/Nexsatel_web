@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN USUARIOS </b><a class="btn bg-gradient-primary ml-2" href="/usuario/create">Crear Usuario</a></h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Foto</th>
                    <th>Dni</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Rol</th>
                    <th>Adicional</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->direccion }}</td>
                        <td><img src="{{ Storage::url($usuario->foto)}}" alt=""  width=80px></td>
                        <td>{{ $usuario->dni }}</td>
                         <td>{{ $usuario->tipo }}</td>
                         <td>{{ $usuario->estado }}</td>
                         <td>{{ $usuario->rol }}</td>
                         <td>{{ $usuario->adicional }}</td>
                        <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="/usuario/editar/{{ $usuario->id }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          <a class="btn btn-danger btn-sm" href="/usuario/borrar/{{ $usuario->id }}" onclick="return confirm('¿Estás seguro de eliminar este evento?')">
                              <i class="fas fa-trash">
                              </i>
                              Eliminar
                          </a>
                      </td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

</div>
@endsection