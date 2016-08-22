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

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ URL::to('admin/users/create') }}">
						<button type="button" class="btn btn-primary">Crear Nuevo Usuario</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                	<th style="width: 10px">#</th>
                  	<th>Nombre</th>
                  	<th>Cedula</th>
                  	<th>Tipo de Usuario</th>
                  	<th>accion</th>
                </tr>
                </thead>
                <tbody>
                <style type="text/css">
                	.label-operador
                	{
                		background-color: #00a65a !important;
                	}
                	.label-despachador
                	{
                		background-color: #3c8dbc !important;
                	}
                	.label-supervisor
                	{
                		background-color: #f39c12 !important;
                	}
                	.label-admin
                	{
                	    background-color: #dd4b39 !important;
                	}
                </style>
               	@foreach($user as $users)
					<tr>
					  <th scope="row"><a href="/admin/users/{{ $users->id }}">{{ $users->id}}</a></th>
			          <td>{{ $users->name }}</td>
			          <td>{{ $users->email }}</td>
			          <td><span class="label label-{{ $users->roles }}">{{ $users->roles }}</span></td>

			 		  <td><a href="{{ URL::to('admin/users/'.$users->id. '/edit') }}">
						<button type="button" class="btn btn-primary">Editar</button></a>
					    | {!!  Form::open(['url'=>'admin/users/'.$users->id]) !!}
	                    		{!! Form::hidden('_method', 'DELETE') !!}
	                    		{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
	                			{!! Form::close() !!}</td>
					  </tr>
					</tr>  
				@endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
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
