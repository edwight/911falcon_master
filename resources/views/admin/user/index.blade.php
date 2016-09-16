@extends('layouts.master')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<!-- module panel estadisticas -->
    	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$admin}}</h3>

              <p>Usuarios Administrador</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow"">
            <div class="inner">
              <h3>{{$supervisor}}</h3>

              <p>Usuarios Supervisores</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="http://localhost:8000/admin/users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$despachador}}</h3>

              <p>Usuarios Despachadores</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="http://localhost:8000/admin/users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$operador}}</h3>

              <p>Usuarios Operadores</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- end module panel estadisticas -->

      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
              <a href="{{ URL::to('admin/users/create') }}">
                <button type="button" class="btn btn-primary">Crear Nuevo Usuario</button></a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table" id="myTableUser">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Nº Cedula</th>
                      <th>Telefono</th>
                      <th>Tipo de Usuario</th>
                      <th>Foto</th>
                      <th>accion</th>
                  </tr>
                </thead>
              
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
<link rel="stylesheet" type="text/css" href="/plugins/datatables/jquery.dataTables.min.css">
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->

<!-- page script -->
<script>
  $(document).ready(function(){
    var table = $('#myTableUser').DataTable({
          "processing": true,
          "serverSide": true,
          "order": [[ 1, "desc" ]],
          "ajax": "api/listusers",
          "fnRowCallback": function( nRow, data, iDisplayIndex, iDisplayIndexFull ) {
                    if ( data.roles == "admin" )
                    {
                        $('td', nRow).css('background-color', '#ffe4e1');
                    }
                },
          "columns":[
            {data: 'id'},
            {data: 'name'},
            {data: 'email'},
            {data: 'phone'},
            {data: 'roles'},
            {"data": function (data, type, row, meta) {
              return '<div class="pull-left image"><img style="max-width: 45px;" src="'+data.foto+'" class="img-circle" alt="User Image"></div>';
                }
            },
            {"data": function (data, type, row, meta) {
              return '<a href="/admin/users/' + data.id + '/edit">' + '<button type="button" class="btn btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></button></a> <a href="/admin/users/' + data.id + '">' + '<button type="button" class="btn btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></button></a>';
                }
            },
          ],
    });
});
</script>

@endsection
