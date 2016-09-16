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
            

            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['admin.users.update', $user->id],'role'=>'form','files' => true]) !!}
            <input name="_method" type="hidden" value="PUT">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Telefono</label>
                       {!! Form::text('phone',$user->phone,['class'=>'form-control','name'=>'phone','placeholder'=>'Telefono','id'=>'exampleInputEmail1'] ) !!}
                    </div>
                  <!-- /.form-group -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombres</label>
                      {!! Form::text('nombre',$user->name,['class'=>'form-control','name'=>'nombre','placeholder'=>'Nombre','id'=>'Nombre'] ) !!}
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Cedula</label>
                      {!! Form::text('email',$user->email,['class'=>'form-control','name'=>'email','placeholder'=>'Cedula','id'=>'Email'] ) !!}
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="DireccionInput">Grupo</label>
                      <select name="grupos" class="form-control select2" style="width: 100%;">
                        @if($user->grupo)
                          <option selected="selected" value="{{$user->grupo->id}}">
                           {{ $user->grupo->name}}
                          </option>
                        @endif
                        @foreach ($grupolist as $grupo)
                               <option value="{{ $grupo->id }}">{{ $grupo->name }}</option>
                        @endforeach
                      </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="DireccionInput">Roles</label>
                        <select name="type" class="form-control select2" style="width: 100%;">
                            <option selected="selected">{{$user->roles}}</option>
                            <option value="operador">operador</option>
                            <option value="despachador">despachador</option>
                            <option value="supervisor">supervisor</option>
                             <option value="admin">admin</option>
                        </select>
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="DireccionInput">Organismos</label>
                      <select name="organismos" class="form-control select2" style="width: 100%;">
                        @if($user->organismo)
                          <option selected="selected value="{{ $user->organismo->id }}">{{ $user->organismo->siglas }}</option>
                        @endif
                        @foreach ($organismos as $organismo)
                          <option value="{{ $organismo->id }}">{{ $organismo->siglas }}</option>
                        @endforeach
                      </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
               <div class="col-md-12">
                  <div class="form-group">
                        {{Form::label('photo', 'Foto', ['class' => 'col-md-4 control-label','for'=>'inputWarning1']) }}
                        {{Form::file('photo',['class'=>'btn btn-warning'])}}
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
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



