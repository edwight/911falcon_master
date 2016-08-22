@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modulo Despacho
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
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
                    <span class="description-percentage text-primary"><i class="ion-stats-bars"></i> 17%</span>
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
                    <span class="description-percentage text-red"><i class="ion-stats-bars"></i> 0%</span>
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
                    <span class="description-percentage text-orange"><i class="ion-stats-bars"></i> 20%</span>
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
                    <span class="description-percentage text-green"><i class="ion-stats-bars"></i> 18%</span>
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

              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Estado</label>
                    <input type="text" value="{{$contacto->estado->entidad}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Municipio</label>
                    <input type="text" value="{{$contacto->municipio->municipio}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Ciudad</label>
                    <input type="text" value="{{$contacto->parroquia->parroquia}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="DireccionInput">Organismos</label>
                    <input type="text" value="{{$organismos->siglas}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="DireccionInput">Motivo</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="" value="{{ $contacto->motivo->motivo}}">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
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