@extends('layouts.apps')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN SOLICITUD </b><a class="btn bg-gradient-success ml-2" href="/solicitudes/export" ><i class="fas fa-file-excel mr-2"></i>Exportar</a></h3>
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
                        <td>{{ $solicitud->ubigeo->departamento->nombre }}</td>
                        <td>{{ $solicitud->ubigeo->provincia->nombre }}</td>
                        <td>{{ $solicitud->ubigeo->distrito->nombre }}</td>
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
