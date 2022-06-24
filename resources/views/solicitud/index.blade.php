@extends('layouts.apps')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN SOLICITUD </b><a class="btn bg-gradient-success ml-2" href="/solicitudes/export" ><i class="fas fa-file-excel mr-2"></i>Exportar</a></h3>
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
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Tipo Doc</th>
                    <th>N° Doc</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $solicitud)
                    <tr>
                        <td>{{ $solicitud->id }}</td>
                        <td>{{ $solicitud->nombre }}</td>
                        <td>{{ $solicitud->apellido }}</td>
                        <td>{{ $solicitud->departamento }}</td>
                        <td>{{ $solicitud->provincia }}</td>
                        <td>{{ $solicitud->distrito }}</td>
                        <td>{{ $solicitud->direccion }}</td>
                        <td>{{ $solicitud->telefono }}</td>
                        <td>{{ $solicitud->email }}</td>
                        <td>{{ $solicitud->tdocumento }}</td>
                        <td>{{ $solicitud->ndocumento }}</td>
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