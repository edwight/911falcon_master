@extends('layouts.master')
@section('css')
<!-- daterange picker -->
   <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">

@endsection
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporte Organismos
        <small>Total</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Reporte Organismos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="row">
              <div class="col-xs-12">
                <div class="box-header">
                <div class="btn-group" role="group" aria-label="...">
                  <a href="{{ URL::to('admin/reporte/organismos/hoy') }}">
                    <button type="button" class="btn btn-default">Reporte Hoy</button>
                  </a>
                  <a href="{{ URL::to('admin/reporte/organismos/total') }}">
                    <button type="button" class="btn btn-default">Reporte Total</button>
                  </a>
                </div>
              </div>
              {!! Form::open(array('action'=>'Estadisticas\EstadisticasController@organismosReporteBusqueda', 'method' => 'post')) !!} 
              <div class="col-xs-4">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                      <input type="text" name="fechaStart" class="form-control pull-right" id="datepickerStart">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                      <input type="text" name="fechaEnd" class="form-control pull-right" id="datepickerEnd">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>

              <div class="col-xs-4">
                <div class="form-group">
                  <div class="input-group">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                  <!-- /.input group -->
                  </div>
                </div>
              </div>
            {!! Form::close() !!}
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
  <!-- date-range-picker -->
<script src="{{ asset('/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script type="text/javascript">
$(function () {
  $('#reservation').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
      //Date range picker with time picker
  $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM-DD-YYYY h:mm A'});
      //Date range as a button
  $('#daterange-btn').daterangepicker(
    {
    ranges: {
      'Today': [moment(), moment()],
      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
    startDate: moment().subtract(29, 'days'),
    endDate: moment()
    },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
      );

      //Date picker
     

      // Getter
      //var dateFormat = $( "#datepicker" ).val();
      // Setter
      $( "#datepickerStart").datepicker({
          format: 'yyyy-mm-dd',
       });
      $( "#datepickerEnd").datepicker({
          format: 'yyyy-mm-dd',
       });

      $(".timepicker").timepicker({
        showInputs: false
      });

});
</script>
@endsection

