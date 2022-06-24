@extends('layouts.apps')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN WHATSAPP </b></h3>
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
                    <th>Whatsapp</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $estilos->whatsapp }}</td>
                        <td>{{ $estilos->facebook }}</td>
                        <td>{{ $estilos->instagram }}</td>
                        <td>{{ $estilos->twitter }}</td>
                        <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="{{ route('redes.edit') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                        </td>
                    </tr>
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
