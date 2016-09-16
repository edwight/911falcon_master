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
            <div class="box-header">
              <a href="{{ URL::to('admin/reporte/llamadas/hoy') }}">
                        <button type="button" class="btn btn-primary">Reporte de Hoy</button></a>
              <a href="{{ URL::to('admin/reporte/llamadas/mensual') }}">
                        <button type="button" class="btn btn-primary">Reporte Mensual</button></a>
              <a href="{{ URL::to('admin/reporte/llamadas/total') }}">
                        <button type="button" class="btn btn-primary">Reporte Total</button></a>
            </div>
            
            <!-- /.box-header -->
            <section class="content"  id="contenido_principal">
        
            </section>
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
<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

<script src="{{ asset('/highcharts/sistemalaravel.js') }}"></script>
<script src="{{ asset('/highcharts/js/highcharts.js') }}"></script>
<script src="{{ asset('/highcharts/graficas.js') }}"></script>

<script>cargarlistado(1);</script>

<script>
var chart;

$(document).ready(function() {

    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'contenido_principal',
            type: 'line',
            marginRight: 130,
            marginBottom: 25, 
            events: {
                load: requestData
            }
        },
        title: {
            text: 'Menções Mensais',
            x: -20 //center
        },
        xAxis: {
            categories: [1,2,3,4,5]
        },
        yAxis: {
            title: {
                text: 'Menções'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -10,
            y: 100,
            borderWidth: 0
        },
        series: [
         {
            name: 'mentions',
            data: []
          }
        ]
    });
});

function requestData() {
    $.ajax({
        url: 'api/grafica_registros/2016/8',
        type: "GET",
        dataType: "json",
        async: true,
        data : {registrosdia:registrosdia},
        success: function(data) {
          options.series[0].setData(data);
        },
        cache: false
    });
}
</script>
@endsection
