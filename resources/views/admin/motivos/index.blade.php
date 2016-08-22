@extends('layouts.master')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabla Motivos
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Tabla Motivos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ URL::to('admin/motivos/create') }}">
                        <button type="button" class="btn btn-primary">Crear Nuevo Motivos</button></a>

                       @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
		          <th>#</th>
		          <th>motivo</th>
		          <th>activo</th>
		          <th>Acciones</th>
		        </tr>
                </thead>
                <tbody>
                @foreach($motivos as $motivo)
			        <tr>
			          <th scope="row">{{ $motivo->id}}</th>
			          <td>{{ $motivo->motivo }}</td>
			          <td>{{ $motivo->activo }}</td>
			          <td><a href="{{ URL::to('admin/motivos/'.$motivo->id. '/edit') }}">
					  <button type="button" class="btn btn-primary">Editar</button></a>
			          | {!!  Form::open(['url'=>'admin/motivos/'.$motivo->id]) !!}
                		{!! Form::hidden('_method', 'DELETE') !!}
                		{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            			{!! Form::close() !!}</td>
			        </tr>
			        </tr>
				@endforeach
                
                </tbody>
                <tfoot>
                <tr>
                   <th>#</th>
		          <th>motivo</th>
		          <th>activo</th>
		          <th>Acciones</th>
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


