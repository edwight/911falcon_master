@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recepcion de Llamadas
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Recepcion de Llamadas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">estadisticas</h3>
<!-- ----------------------------------------------------- -->
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-primary"><i class="ion-stats-bars"></i> </span>
                    <h5 class="description-header">
                    @if($llamadas)
                      {{ $llamadas->registradas }}
                    @else
                      0
                    @endif
                    </h5>
                    <span class="description-text text-primary">Registradas</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="ion-stats-bars"></i> </span>
                    <h5 class="description-header">
                    @if($llamadas)
                      {{ $llamadas->informativas }}
                    @else
                      0
                    @endif
                    </h5>
                    <span class="description-text text-green">Informativas</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-orange"><i class="ion-stats-bars"></i> </span>
                    <h5 class="description-header">
                    @if($llamadas)
                      {{ $llamadas->sabotaje }}
                    @else
                      0
                    @endif
                    </h5>
                    <span class="description-text text-orange">Sabotaje</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="ion-stats-bars"></i> </span>
                    <h5 class="description-header">
                    @if($llamadas)
                      {{ $llamadas->falsas }}
                     @else
                      0
                    @endif
                      </h5>
                    <span class="description-text text-red">Falsas</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            <!-- ----------------------------------------------------- -->
             <div class="panel-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              </div>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        {!! Form::open(['action' =>'Operadores\RecepcionController@store','role'=>'form']) !!}

          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    {!! Form::label('telefono', 'Telefono', array('for' => 'Inputphone')) !!}
                    {!! Form::number('telefono', null,['class'=>'form-control','id'=>'Inputphone','name'=>'telefono','placeholder'=>'Telefono'] ) !!}
                  </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', array('for' => 'Inputname')) !!}
                    {!! Form::text('nombre', null,['class'=>'form-control','id'=>'Inputname','name'=>'nombre','placeholder'=>'Nombre'] ) !!}
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Cedula', array('for' => 'Inputdni')) !!}
                    {!! Form::text('cedula', null,['class'=>'form-control','id'=>'Inputdni','name'=>'cedula','placeholder'=>'Cedula'] ) !!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  {!! Form::label('apellido', 'Apellido', array('for' => 'InputApellido')) !!}
                  {!! Form::text('apellido', null,['class'=>'form-control','id'=>'InputApellido','name'=>'apellido','placeholder'=>'Apellido'] ) !!}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  {!! Form::label('direccion', 'Direccion', array('for' => 'InputDireccion')) !!}
                  {!! Form::textarea('direccion', null,['class'=>'form-control','rows'=>'10','id'=>'InputDireccion','name'=>'direccion','placeholder'=>'Direccion'] ) !!}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('p_referencia', 'Punto de Referencia', array('for' => 'InputPreferencia')) !!}
                    {!! Form::textarea('p_referencia', null,['class'=>'form-control','rows'=>'10','id'=>'InputPreferencia','name'=>'p_referencia','placeholder'=>'Punto de Referencia'] ) !!}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion', array('for' => 'Inputdescripcion')) !!}
                    {!! Form::textarea('descripcion', null,['class'=>'form-control','rows'=>'10','id'=>'Inputdescripcion','name'=>'descripcion','placeholder'=>'Descripcion'] ) !!}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Estado</label>
                    <select id="estado" class="form-control select2" name="estado" style="width: 100%;">
                      <option selected="selected" value="11">Falcòn</option>
                      @foreach ($estados as $estado)
                          <option value="{{ $estado->id }}">{{ $estado->entidad }}</option>
                      @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Municipio</label>
                    <select id="municipio" class="form-control select2" name="municipio" style="width: 100%;">
                      <option selected="selected"> </option>
                      @foreach ($municipios as $municipio)
                           <option value="{{ $municipio->id }}">{{ $municipio->municipio }}</option>
                      @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Parroquia</label>
                    <select id="parroquia" class="form-control select2" name="parroquia" style="width: 100%;">
                      <option selected="selected">--:-- </option>
                      
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Localidad</label>
                    <select id="localidad" class="form-control select2" name="localidad" style="width: 100%;">
                      <option selected="selected"> </option>
                      
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Cuadrante</label>
                    <select id="localidad" class="form-control select2" name="localidad" style="width: 100%;">
                      <option selected="selected"> </option>
                      
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Organismos</label>
                    <select id="organismo"  multiple="multiple" class="form-control select2" name="organismo[]" style="width: 100%;">
                      @foreach ($organismos as $organismo)
                        <option value="{{ $organismo->id }}">{{ $organismo->siglas }}</option>
                      @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Motivos</label>
                    <select class="form-control select2" name="motivos" style="width: 100%;">
                    <option selected="selected"> </option>
                      @foreach ($motivos as $motivo)
                                    <option value="{{ $motivo->id }}">{{ $motivo->motivo }}</option>
                      @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- /.box-body -->
        <div class="box-footer">
            <button name="submit" value="registrada" type="submit" class="btn btn-primary">Registradas</button>
            <button name="submit" value="informativas" type="submit" class="btn btn-info">Informativas</button>
            <button name="submit" value="falsas" type="submit" class="btn btn-danger">Falsas</button>
            <button name="submit" value="sabotaje" type="submit" class="btn btn-warning">Sabotaje</button>
            </div>
      </div>
      <!-- /.box -->
      
    {!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('javascript')

<script charset="utf-8">
/*
  $("#series").chained("#mark");
$("#model").chained("#series");
*/

$(".organismo").select2({
  tags: true,
  tokenSeparators: [',', ' ']
})

jQuery(document).ready(function($){
    $('#municipio').change(function(){
      $.get("{{ url('api/dropdown/municipio')}}", 
        { option: $(this).val() }, 
        function(data) {
          var parroquia = $('#parroquia');
          parroquia.empty();
 
          $.each(data, function(index, element) {
                  parroquia.append("<option value='"+ index +"'>" + element + "</option>");
              });
        });
    });
  });

jQuery(document).ready(function($){
    $('#parroquia').change(function(){
      $.get("{{ url('api/dropdown/parroquia')}}", 
        { cuadrantes: $(this).val() }, 
        function(data) {
          var cuadrante = $('#cuadrante');
          cuadrante.empty();
 
          $.each(data, function(index, element) {
                  cuadrante.append("<option value='"+ index +"'>" + element + "</option>");
              });
        });
    });
  });
/*

$(function(){

  $("#parroquia-remote").remoteChained("#municipio-remote","api/municipio/json");

  $('#parroquia-remotes').change(function()
{
    $.get('/countries/' + this.value + '/cities.json', function(cities)
    {
        var $state = $('#state');

        $state.find('option').remove().end();

        $.each(cities, function(index, city) {
            $state.append('<option value="' + city.id + '">' + city.name + '</option>');
        });
    });
});

  $("#series-remote").remoteChained("#mark-remote", "api/chained/json");
  $("#model-remote").remoteChained("#series-remote", "api/chained/json");
  $("#engine-remote").remoteChained("#series-remote, #model-remote", "http://www.appelsiini.net/projects/chained/json.php");
});
*/
</script>

@endsection