@extends('layouts.master')

@section('css')
<style type="text/css">
  .bg{
      color:black;
    }
   .bg-1{
    background-color: #03b7b7 !important;
   }
  .bg-2{
    background-color: #3286c1 !important; 
  }
  .bg-3{
    background-color: #fd59a7 !important; 
  }
  .bg-4{
    background-color: #aef5cd !important; 
  }
  .bg-5{
    background-color: #fdff92 !important; 
  }
  .bg-6{
    background-color: #a692ff !important; 
  }
  .bg-7{
    background-color: #f5aeae !important; 
  }
  .bg-8{
    background-color: #e3b029 !important; 
  }
  .bg-9{
    background-color: #4e277f !important; 
  }
  .bg-10{
    background-color: #a692ff !important; 
  }
  .bg-11{
    background-color: #4b3621 !important; 
  }
  .bg-12{
    background-color: #e2f5ae !important; 
  }
  .bg-13{
    background-color: #f5ceae !important; 
  }
  .bg-14{
    background-color: #aef5cd !important; 
  }
  .bg-15{
    background-color: #7b9b12 !important; 
  }
  .bg-16{
    background-color: #ee9f77 !important; 
  }
  .bg-17{
    background-color: #54f0b3 !important; 
  }
  .bg-18{
    background-color: #008080 !important; 
  }
  
</style>
@endsection
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
             {!! Form::open(array('action'=>'Supervisores\SupervisoresController@busquedaDespacho', 'method' => 'post')) !!} 

              <div class="col-xs-4">
                <div class="form-group">
                  <label>Opciones:</label>
                    <div class="input-group">
                      <label>
                        <input type="radio" value="1" name="opcion" class="minimal-red" checked>
                        Telefono
                      </label>
                      <label>
                        <input type="radio" value="2" name="opcion" class="minimal-red">
                        Nombre
                      </label>
                      <label>
                        <input type="radio" value="3" name="opcion" class="minimal-red">
                        Estatus
                      </label>
                      <label>
                        <input type="radio" value="4" name="opcion" class="minimal-red">
                        Fecha
                      </label>
                    </div>
                  <!-- /.input group -->
                </div>
              </div>

              <div class="col-xs-4">
                <div class="box-tools"><label>Busqueda</label>
                  <div class="input-group input-group-sm" style="width: 250px;">
                  
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Busqueda">

                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-4">
                <div class="form-group">
                <label>Busqueda por Fechas:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="fecha" class="form-control pull-right" id="reservation">
                  </div>
                <!-- /.input group -->
                </div>
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
                    <th>#</th>
	                  <th>Telefono</th>
	                  <th>Cedula</th>
	                  <th>Nombre</th>
	                  <th>Funcionario</th>
                    <th>Organismos</th>
	                  <th>Estatus</th>
                    <th>fecha</th>
	                </tr>
                </thead>
                <tbody>
                @foreach($contacto as $contactos)
                	@if($contactos->status)
                	<tr>
				          <th scope="row"><a href="/admin/supervisores/despacho/{{ $contactos->id}}/edit">{{ $contactos->id }}</a></th>
                  <td>{{ $contactos->telefono }}</td>
				          <td>{{ $contactos->cedula }}</td>
				          <td>{{ $contactos->nombre }}</td>
                  <td>
                  @foreach($contactos->user as $users)
				             <p>{{ $users->name }}|{{ $users->roles }}</p>
                  @endforeach
                  </td>
                  <td>
                  @foreach($contactos->organismos as $organismos)
                   <p> <small class="label pull-right bg bg-{{$organismos->id}}">{{ $organismos->siglas }}</small></p>
                  @endforeach
                  </td>
				          <td><small class="label pull-right bg-blue">no activo</small></td>
                  <td>{{ $contactos->fecha_at }}</small></td>
					       </tr>
                	@else
                	<tr>
					  <th scope="row"><a href="/admin/supervisores/despacho/{{ $contactos->id}}/edit">{{ $contactos->id }}</a></th>
                <td>{{ $contactos->telefono }}</td>
			          <td>{{ $contactos->cedula }}</td>
			          <td>{{ $contactos->nombre }}</td>
                <td>
			          @foreach($contactos->user as $users)
                    <p>{{ $users->name }}|{{ $users->roles }}</p>
                @endforeach
                </td>
                <td>
                  @foreach($contactos->organismos as $organismos)
                     <p><small class="label pull-right bg bg-{{$organismos->id}}">{{ $organismos->siglas }}</small></p>
                  @endforeach
                </td>
			          <td><small class="label pull-right bg-red">activo</small></td>
                 <td>{{ $contactos->fecha_at }}</small></td>
			        
					</tr>
					@endif
				@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                    <th>Telefono</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Funcionario</th>
                    <th>Organismos</th>
                    <th>Estatus</th>
                    <th>fecha</th>
                </tr>
                </tfoot>

              </table>
              <div class="col-sm-12">
              <div class="dataTables_paginate paging_simple_numbers" id="paginate">
                <ul class="pagination">
                  {{ $contacto->links() }}
                </ul>
              </div>
            </div>
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
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

@endsection

