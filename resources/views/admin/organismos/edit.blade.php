@section('base')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario: {{$user->name}}</div>
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
                    
                    {!! Form::model($user, array('route' => array('admin.users.update', $user->id))) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre', null,['class'=>'form-control','name'=>'nombre'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('cedula', 'Cedula', array('class' => 'col-md-4 control-label')) !!}
                            <div class="col-md-6">
                                {!! Form::text('cedula',null,['class'=>'form-control','name'=>'cedula'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class'=>'form-control','name'=>'password'] ) !!}
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('telefono', null,['class'=>'form-control','name'=>'telefono'] ) !!}
                            </div>
                        </div>
                        <div class="form-group">
                         {{Form::label('grupos', 'Grupos', ['class' => 'col-md-4 control-label'])}}
                        <div class="col-md-6 ">
                            <select data-placeholder="Selecione una Categoria..." name="grupos" class="form-control"  tabindex="2" id="grupos">
                            <option value=""></option>
                            @foreach ($user->grupolist as $grupo)
                                <option value="{{ $grupo->id }}">{{ $grupo->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        {!! Form::label('photo', 'Foto', ['class' => 'col-md-4 control-label','for'=>'inputWarning1']) !!}
                        <div class="col-md-6 ">
                            {!! Form::file('photo',['class'=>'btn btn-warning']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('type', 'Tipo de usuario', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('type',[''=>'selecione tipo','Supervisor'=>'supervisor','Operador'=>'operador','despachador'=>'Despachador','admin'=>'Administrador'], null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Registar
                            </button>
                        </div>
                    </div>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
