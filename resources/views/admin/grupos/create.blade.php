@extends('layouts.master')
@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Modulo Grupo de Usuario
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
              <h3 class="box-title">Crear Grupos</h3>
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
            
            {!! Form::open(array('action' => 'Admin\GruposController@store','method'=>'POST' )) !!}
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Nombre del Grupo </label>
                       {!! Form::text('grupos','',['class'=>'form-control','name'=>'grupos','placeholder'=>'grupos','id'=>'exampleInputEmail1'] ) !!}
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



