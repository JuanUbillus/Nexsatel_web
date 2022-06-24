@extends('layouts.apps')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN PLANES </b><a class="btn bg-gradient-primary ml-2" href="/tarifas/create">Crear Plan</a></h3>
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
                    <th>Plan</th>
                    <th>Precio</th>
                    <th>Descripcion 1</th>
                    <th>Descripcion 2</th>
                    <th>Descripcion 3</th>
                    <th>Descripcion 4</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tarifas as $tarifa)
                    <tr>
                        <td>{{ $tarifa->id }}</td>
                        <td>{{ $tarifa->plan }}</td>
                        <td>{{ $tarifa->precio }}</td>
                        <td>{{ $tarifa->descripcion1 }}</td>
                        <td>{{ $tarifa->descripcion2 }}</td>
                        <td>{{ $tarifa->descripcion3 }}</td>
                        <td>{{ $tarifa->descripcion4 }}</td>
                        <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="/tarifa/editar/{{ $tarifa->id }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          <a class="btn btn-danger btn-sm" href="/tarifa/borrar/{{ $tarifa->id }}" onclick="return confirm('¿Estás seguro de eliminar este evento?')">
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