@extends('layouts.apps')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b> GESTIÓN PRECIOS PRINCIPAL </b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Titulo 1</th>
                    <th>Plan 1</th>
                    <th>Descripcion 1</th>
                    <th>Descripcion 1.2</th>
                    <th>Descripcion 1.3</th>
                    <th>Descripcion 1.4</th>
                    <th>Descripcion 1.5</th>
                    <th>Titulo 2</th>
                    <th>Plan 2</th>
                    <th>Descripcion 2</th>
                    <th>Descripcion 2.2</th>
                    <th>Descripcion 2.3</th>
                    <th>Descripcion 2.4</th>
                    <th>Descripcion 2.5</th>
                    <th>Titulo 3</th>
                    <th>Plan 3</th>
                    <th>Descripcion 3</th>
                    <th>Descripcion 3.2</th>
                    <th>Descripcion 3.3</th>
                    <th>Descripcion 3.4</th>
                    <th>Descripcion 3.5</th>
                    <th>Mb</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($precios as $precio)
                    <tr>
                        <td>{{ $precio->titulo1 }}</td>
                        <td>{{ $precio->plan1 }}</td>
                        <td>{{ $precio->desc_p1 }}</td>
                        <td>{{ $precio->desc_p1_2 }}</td>
                        <td>{{ $precio->desc_p1_3 }}</td>
                        <td>{{ $precio->desc_p1_4 }}</td>
                        <td>{{ $precio->desc_p1_5 }}</td>
                        <td>{{ $precio->titulo2 }}</td>
                        <td>{{ $precio->plan2 }}</td>
                        <td>{{ $precio->desc_p2 }}</td>
                        <td>{{ $precio->desc_p2_2 }}</td>
                        <td>{{ $precio->desc_p2_3 }}</td>
                        <td>{{ $precio->desc_p2_4 }}</td>
                        <td>{{ $precio->desc_p2_5 }}</td>
                        <td>{{ $precio->titulo3 }}</td>
                        <td>{{ $precio->plan3 }}</td>
                        <td>{{ $precio->desc_p3 }}</td>
                        <td>{{ $precio->desc_p3_2 }}</td>
                        <td>{{ $precio->desc_p3_3 }}</td>
                        <td>{{ $precio->desc_p3_4 }}</td>
                        <td>{{ $precio->desc_p3_5 }}</td>
                        <td>{{ $precio->mb }}</td>
                        <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="{{ route('precios.edit') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
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
