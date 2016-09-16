@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recepcion de Llamadas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Modulo de Llamada</a></li>
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

            <div class="col-md-5">
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
                <!--
                  <div class="form-group">
                    <label for="DireccionInput">Cuadrante</label>
                    <select id="cuadrante" disabled="" class="form-control select2" name="cuadrante" style="width: 100%;">
                      <option selected="selected">--:--</option>
                      
                    </select>
                  </div>
                -->
                <!-- /.form-group -->
                <!--
                <div class="form-group">
                    <label for="DireccionInput">detalles</label>
                    <input type="text" name="detalles" id="detalles" class="form-control select2"> 
                </div>
                -->
                <!-- /.form-group -->
            </div>
              <!-- /.col -->

              <div class="col-md-3">
                <select name="from[]" id="fromOrganismos" class="multiselect form-control" size="8" multiple="multiple" data-right="#multiselect_to_1" data-right-all="#right_All_1" data-right-selected="#right_Selected_1" data-left-all="#left_All_1" data-left-selected="#left_Selected_1">
                  @foreach ($organismos as $organismo)
                        <option value="{{ $organismo->id }}">{{ $organismo->siglas }}</option>
                  @endforeach
                </select>
              </div>
    
              <div class="col-md-1">
                <button type="button" id="right_All_1" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
                <button type="button" id="right_Selected_1" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                <button type="button" id="left_Selected_1" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                <button type="button" id="left_All_1" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
              </div>
    
            <div class="col-md-3">
              <select name="organismo[]" id="multiselect_to_1" class="form-control" size="8" multiple="multiple"></select>
            </div>

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

<script src="{{ asset('plugins/multiselect/multiselect.min.js') }}"></script>
<script charset="utf-8">

jQuery(document).ready(function($){
    //Initialize Select2 Elements
    $(".select2").select2();
});

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
      $.get("{{ url('api/dropdown/localidad')}}", 
        { option: $(this).val() }, 
        function(data) {
          var localidad = $('#localidad');
          localidad.empty();
 
          $.each(data, function(index, element) {
                  localidad.append("<option value='"+ index +"'>" + element + "</option>");
              });
        });
    });
  });





</script>

<script src="{{ asset('plugins/multiselect/multiselect.min.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.multiselect').multiselect();
});

$('#fromOrganismos').multiselect({
        search: {
            left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
        }
    });
</script>
@endsection