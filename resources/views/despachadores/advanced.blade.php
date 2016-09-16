@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modulo Despacho
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Despacho</a></li>
        <li class="active">Modulo Despacho</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Despacho</h3>

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
        {!! Form::open(['action' =>'Despachadores\DespachadoresController@store','role'=>'form']) !!}
          <div class="box-body">
            <!-- ----------------------------------------------------- -->
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-primary"><i class="ion-stats-bars"></i></span>
                    <h5 class="description-header">
                    @if($casos)
                      {{ $casos->efectivos }}
                    @else
                      0
                    @endif
                    </h5>
                    <span class="description-text text-primary">Efectivo</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><i class="ion-stats-bars"></i></span>
                    <h5 class="description-header">
                    @if($casos)
                      {{ $casos->sinefecto }}
                    @else
                      0
                    @endif
                    </h5>
                    <span class="description-text text-red">Sin Efecto</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-orange"><i class="ion-stats-bars"></i></span>
                    <h5 class="description-header">
                    @if($casos)
                      {{ $casos->noatendida }}
                    @else
                      0
                    @endif
                    </h5>
                    <span class="description-text text-orange">No Atendido</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-green"><i class="ion-stats-bars"></i></span>
                    <h5 class="description-header">
                    @if($casos)
                      {{ $casos->repetida }}
                     @else
                      0
                    @endif
                      </h5>
                    <span class="description-text text-green">Repetido</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            <!-- ----------------------------------------------------- -->
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    {!! Form::label('telefono', 'Telefono', array('for' => 'Inputphone')) !!}
                    <input type="text" value="{{$contacto->telefono}}" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', array('for' => 'Inputname')) !!}
                    <input type="text" value="{{$contacto->nombre}}"  class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Cedula', array('for' => 'Inputdni')) !!}
                   <input type="text"  value="{{$contacto->cedula}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  {!! Form::label('apellido', 'Apellido', array('for' => 'InputApellido')) !!}
                  <input type="text" value="{{$contacto->apellido}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  {!! Form::label('direccion', 'Direccion', array('for' => 'InputDireccion')) !!}
                  <textarea class="form-control"  rows="10" placeholder="Enter ..." disabled="">{{$contacto->direccion->ubicacion}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('p_referencia', 'Punto de Referencia', array('for' => 'InputPreferencia')) !!}
                    <textarea class="form-control" rows="10" placeholder="Enter ..." disabled="">{{$contacto->direccion->preferencia}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion', array('for' => 'Inputdescripcion')) !!}
                    <textarea class="form-control" rows="10" placeholder="Enter ..." disabled="">{{$contacto->direccion->despcricion}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Estado</label>
                    <input type="text" value="{{$contacto->estado->entidad}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <div class="form-group">
                  <label for="DireccionInput">Municipio</label>
                  <select id="municipio" disabled="" class="form-control select2" name="municipio" style="width: 100%;">
                    <option value="{{$contacto->municipio->id}}">{{$contacto->municipio->municipio}}</option>
                    
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Parroquia</label>
                    <input type="text" value="{{$contacto->parroquia->parroquia}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Localidad</label>
                    <select disabled="" id="localidad" class="form-control select2" name="localidad" style="width: 100%;">
                      <option selected="selected"> </option>
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-5">
                 <div class="form-group">
                    <label for="DireccionInput">Motivos</label>
                     <input type="text" value="{{$contacto->motivo->motivo}}" class="form-control" placeholder="Motivos" disabled="">
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="DireccionInput">Cuadrante</label>
                  <select id="cuadrante" class="form-control select2" name="cuadrante" style="width: 100%;">
                    <option selected="selected"> </option>
                    
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->

                <div class="form-group">
                 <label for="DireccionInput">Funcionarios</label>
                  <select name="funcionario" id="funcionarios" class="multiselect form-control" size="2" multiple="multiple" data-right="#multiselect_to_1" data-right-all="#right_All_1" data-right-selected="#right_Selected_1" data-left-all="#left_All_1" data-left-selected="#left_Selected_1" disabled="" >
                  @foreach ($contacto->user as $funcionarios)
                        <option value="#">{{ $funcionarios->name }}-{{ $funcionarios->roles }}</option>
                  @endforeach
                  </select>
                </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                <select name="from[]" id="fromOrganismos" class="multiselect form-control" size="8" multiple="multiple" data-right="#multiselect_to_1" data-right-all="#right_All_1" data-right-selected="#right_Selected_1" data-left-all="#left_All_1" data-left-selected="#left_Selected_1" disabled="" >
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
              <select id="forOrganismos" disabled=""  name="organismo[]" id="multiselect_to_1" class="form-control" size="8" multiple="multiple">
              @foreach ($contacto->organismos as $organismo)
                <option value="{{ $organismo->id }}">{{ $organismo->siglas }}</option>
              @endforeach
              </select>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                  {!! Form::label('observacion', 'Observacion', array('for' => 'Inputdescripcion')) !!}
                  <textarea class="form-control" name="observacion" rows="10" placeholder="Enter ... Observacion">{{ $contacto->direccion->observacion }}</textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
              {!! Form::hidden('direccionh',$contacto->direccion->id) !!}
              {!! Form::hidden('contactoh',$contacto->id) !!}
              {!! Form::hidden('status',$contacto->status) !!}
              {!! Form::hidden('motivos',$contacto->motivo->id) !!}
            </div>
            <!-- /.row -->
          </div>
         <!-- /.box-body -->
        <div class="box-footer">
            <button name="submit" value="efectivo" type="submit" class="btn btn-primary">Efectivo</button>
            <button name="submit" value="sinefecto" type="submit" class="btn btn-info">Sin Efecto</button>
            <button name="submit" value="noatendida" type="submit" class="btn btn-danger">No Atendido</button>
            <button name="submit" value="repetida" type="submit" class="btn btn-danger">Repetida</button>
            <button name="submit" value="apoyo" type="submit" class="btn btn-warning">Apoyo</button>
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
  var municipio = $('#municipio').val();
  var text = $('#municipio').text();
  //console.log(municipio +' / '+ text);

  
  function getState(val) {
    $.ajax({
    type: "GET",
    url: "{{ url('api/dropdown/cuadrante')}}",
    data:'cuadrantes='+val,
    dataType:'json',
    success: function(data, textStatus){
      var cuadrante = $('#cuadrante');
      cuadrante.empty();
      cuadrante.append("<option value=''> </option>");
      $.each(data, function(index, element) {
        cuadrante.append("<option value='"+ index +"'>" + element + "</option>");
      });
        //$("#state-list").html(data);
    }
    });
  }

  function getDetail(val) {
    $.ajax({
    type: "GET",
    url: "{{ url('api/dropdown/cuadrante/find')}}",
    data:'cuadrante='+val,
    dataType:'json',
      success: function(data){
        var detalles = $('#detalles');
          console.log('detalles: '+data);
          jQuery("label[for='DetallesInput']").html(data.telefono);
          $("#detalles").html(data.telefono);
      }
    });
  }
  var municipio = $('#municipio').val();
  console.log('municipio: '+municipio)
  getState(municipio);


var foo = [];
  var cuadrante = $('#cuadrante option').each(function(i, selected){ 
    //foo[i] = $(selected).text();
    foo[i] = $(selected).val();
    console.log('cuadrante: '+foo[i])
  });
  

  if (cuadrante) {
    getDetail(cuadrante);
  }
  

  jQuery(document).ready(function($) {
      $('.multiselect').multiselect();
  });

  var foo = []; 
  $('#forOrganismos option').each(function(i, selected){ 
    //foo[i] = $(selected).text();
    foo[i] = $(selected).val();
    console.log(foo[i]); 
  });

});


</script>

@endsection






