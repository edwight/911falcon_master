@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>
             <div class="panel-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
        {!! Form::open(['action'=>'Admin\MotivosController@store','class'=>'form-horizontal','role'=>'form', 'files' => true]) !!}
            
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('motivo', 'Motivo', ['for' => 'exampleInputEmail1']) !!}
                        {!! Form::text('motivo', null,['class'=>'form-control','name'=>'motivo','placeholder'=>'Motivo'] ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('activo', 'Activo', ['for' => 'exampleInputEmail1']) !!}
                       {!! Form::select('activo',[''=>'selecione tipo','0'=>'Inactivo','1'=>'Activo'], null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripcion',['for' => 'exampleInputEmail1']) !!}
                         {!! Form::text('descripcion', null,['class'=>'form-control','name'=>'descripcion','placeholder'=>'Descripcion'] ) !!}
                    </div>
                </div>
                <!-- /.col -->
               </div>
            </div>
             <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
      <!-- /.box -->
    {!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
@endsection