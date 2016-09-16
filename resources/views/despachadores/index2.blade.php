@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>Tabla Despacho</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Tabla Despacho</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modulo Despacho</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table" id="myTableUser">
                <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Estatus</th>
	                    <th>Nombre</th>
	                    <th>Telefono</th>
	                    <th>Direccion</th>
	                    <th>Organismos</th>
	                    <th>Motivo</th>
                      <th>Funcionario</th>
	                    <th>Fecha</th>
	                    <th>Accion</th>
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
  <!-- /.content-wrapper -->
@endsection

@section('javascript')
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}">
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script charset="utf-8">
  $(document).ready(function(){
     var table = $('#myTableUser').DataTable( {
          "processing": true,
          "serverSide": true,
          "order": [[ 0, "desc" ]],
          "ajax": "api/users",
          "fnRowCallback": function( nRow, data, iDisplayIndex, iDisplayIndexFull ) {
                    if ( data.status == "1" )
                    {
                        $('td', nRow).css('background-color', '#ffe4e1');
                    }
                },
          "columns":[
            {data: 'id'},
            {data: 'status','visible':false},
            {data: 'nombre'},
            {data: 'telefono'},
            {data: 'direccion.despcricion'},
            {data: 'organismos'},
            {data: 'motivo.motivo'},
            {data: 'user.0.name'},
            {data: 'created_at'},  
            {"data": function (data, type, row, meta) {
              return '<a href="/admin/despacho/' + data.id + '">' + '<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></button></a>';
                    }
                },
          ],
          

      });
      setInterval( function () {
        table.ajax.reload();
      }, 30000 );  

   });
</script>
@endsection
