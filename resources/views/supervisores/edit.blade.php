@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modulo Supervisión
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Modulo de Supervisión</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Supervisor</h3>

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

        {!! Form::model($contacto, ['method' => 'PATCH', 'route' => ['admin.supervisores.despacho.update', $contacto->id]]) !!}
                    <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    {!! Form::label('telefono', 'Telefono', array('for' => 'Inputphone')) !!}
                    <input name="telefono" type="text" value="{{$contacto->telefono}}" class="form-control" placeholder="Enter ..." >
                  </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', array('for' => 'Inputname')) !!}
                    <input name="nombre" type="text" value="{{$contacto->nombre}}"  class="form-control" placeholder="Enter ..." >
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Cedula', array('for' => 'Inputdni')) !!}
                   <input name="cedula" type="text"  value="{{$contacto->cedula}}" class="form-control" placeholder="Enter ..." >
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  {!! Form::label('apellido', 'Apellido', array('for' => 'InputApellido')) !!}
                  <input name="apellido" type="text" value="{{$contacto->apellido}}" class="form-control" placeholder="Enter ..." >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  {!! Form::label('direccion', 'Direccion', array('for' => 'InputDireccion')) !!}
                  <textarea name="direccion" class="form-control"  rows="10" placeholder="Enter ..." >{{$contacto->direccion->ubicacion}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('p_referencia', 'Punto de Referencia', array('for' => 'InputPreferencia')) !!}
                    <textarea  name="p_referencia" class="form-control" rows="10" placeholder="Enter ..." >{{$contacto->direccion->preferencia}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion', array('for' => 'Inputdescripcion')) !!}
                    <textarea name="descripcion" class="form-control" rows="10" placeholder="Enter ..." >{{$contacto->direccion->despcricion}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-3">
                <div class="form-group">
                    <label for="DireccionInput">Estado</label>
                    <select id="estado" class="form-control select2" name="estado" style="width: 100%;">
                      <option selected="selected" value="{{$contacto->estado->id}}">{{$contacto->estado->entidad}}</option>
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
                    <select id="municipio" class="form-control " name="municipio" style="width: 100%;">
                      <option selected="selected" value="{{$contacto->municipio->id}}">{{$contacto->municipio->municipio}}</option>
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
                    <label for="DireccionInput">parroquia</label>
                    <select id="parroquia" class="form-control " name="parroquia" style="width: 100%;">
                      <option selected="selected" value="{{$contacto->parroquia->id}}">{{$contacto->parroquia->parroquia}}</option>
                      @foreach ($parroquias as $parroquia)
                           <option value="{{ $parroquia->id }}">{{ $parroquia->parroquia }}</option>
                      @endforeach
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
                    <label for="DireccionInput">Motivo</label>
                    <select id="motivo" class="form-control " name="motivo" style="width: 100%;">
                    <option selected="selected" value="{{ $contacto->motivo->id}}">{{ $contacto->motivo->motivo}}</option>
                      @foreach ($motivos as $motivo)
                           <option value="{{ $motivo->id }}">{{ $motivo->motivo }}</option>
                      @endforeach
                    </select>
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
                <select name="from[]" id="fromOrganismos" class="multiselect form-control" size="8" multiple="multiple" data-right="#multiselect_to_1" data-right-all="#right_All_1" data-right-selected="#right_Selected_1" data-left-all="#left_All_1" data-left-selected="#left_Selected_1">
                  @foreach ($organismoss as $organismo)
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
              <select name="organismo[]" id="multiselect_to_1" class="form-control" size="8" multiple="multiple">
               
              </select>
            </div>

          </div>
              <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('observacion', 'Observacion', array('for' => 'Inputdescripcion')) !!}
                    <textarea name="observacion" class="form-control" name="observacion" rows="10" placeholder="Enter ... Observacion">{{ $contacto->direccion->observacion }}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              {!! Form::hidden('direccionh',$contacto->direccion->id) !!}
              {!! Form::hidden('contactoh',$contacto->id) !!}
              {!! Form::hidden('status',$contacto->status) !!}
            </div>
            <!-- /.row -->
          </div>
         <!-- /.box-body -->
        <div class="box-footer">
            <button name="submit" value="efectivo" type="submit" class="btn btn-primary">Actualizar</button>
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

  var municipio = $('#municipio').val();
  console.log('municipio: '+municipio)
  getState(municipio);




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