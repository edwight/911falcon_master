@extends('layouts.master')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporte Cuadrantes por Llamadas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Reporte</a></li>
        <li class="active">Reporte Cuadrantes por Llamadas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ URL::to('admin/reporte/organismos/hoy') }}">
                        <button type="button" class="btn btn-primary">Reporte de Hoy</button></a>
              <a href="{{ URL::to('admin/reporte/organismos/mensual') }}">
                        <button type="button" class="btn btn-primary">Reporte Mensual</button></a>
              <a href="{{ URL::to('admin/reporte/organismos/total') }}">
                        <button type="button" class="btn btn-primary">Reporte Total</button></a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>cuadrante</th>
                    <th>Municipio</th>
                    <th>Organismo</th>
                    <th>Reporte</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cuadrantes as $cuadrante)
                  <tr>
                    <th scope="row"><a href="/admin/reporte/cuadrante/{{ $cuadrante->id}}">{{ $cuadrante->id}}</a></th>
                    <td>{{ $cuadrante->cuadrante }}</td>
                    <td>{{ $cuadrante->municipio->municipio }}</td>
                    <td>{{ $cuadrante->organismo->siglas }}</td>
                    <td>{{ $cuadranteA[$cuadrante->id]->count() }}</td>
                  </tr>  
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>cuadrante</th>
                  <th>Municipio</th>
                  <th>Organismo</th>
                  <th>Reporte</th>
                </tr>
                </tfoot>
              </table>  

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('javascript')

<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->

<!-- page script -->

@endsection
