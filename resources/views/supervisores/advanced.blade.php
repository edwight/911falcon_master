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

              <div class="col-md-4">
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
              <div class="col-md-4">
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
              <div class="col-md-4">
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
              <div class="col-md-6">
                <div class="form-group">
                    <label for="DireccionInput">Organismos</label>
                    <select id="organismo" class="form-control" name="organismo" style="width: 100%;">
                    <option selected="selected" value="{{$organismos->id}}">{{$organismos->siglas}}</option>
                      @foreach ($organismoss as $organismo)
                           <option value="{{ $organismo->id }}">{{ $organismo->siglas }}</option>
                      @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
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
              </div>
              <!-- /.col -->
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