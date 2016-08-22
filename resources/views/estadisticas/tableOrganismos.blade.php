@extends('layouts.master')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabla Grupos 
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Tabla Grupo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="row">
              <div class="col-xs-6">
                <div class="box-header">
                  <a href="{{ URL::to('admin/reporte/organismos/hoy') }}">
                            <button type="button" class="btn btn-primary">Reporte de Hoy</button></a>
                  <a href="{{ URL::to('admin/reporte/organismos/mensual') }}">
                            <button type="button" class="btn btn-primary">Reporte Mensual</button></a>
                  <a href="{{ URL::to('admin/reporte/organismos/total') }}">
                            <button type="button" class="btn btn-primary">Reporte Total</button></a>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>Date range:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservation">
                      </div>
                    <!-- /.input group -->
                  </div>
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Siglas</th>
                    <th>Organismo</th>
                    <th>Reporte</th>
                </tr>
                </thead>
                <tbody>
           
                @foreach($organismos as $organismo)
                    <tr>
                      <th scope="row">{{ $organismo->id}}</th>
                      <td>{{ $organismo->siglas }}</td>
                      <td>{{ $organismo->nombre }}</td>
                      <td>{{ $organismo->contactos->count() }}</td>
                    </tr>  
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>Siglas</th>
                  <th>Nombre</th>
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
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
