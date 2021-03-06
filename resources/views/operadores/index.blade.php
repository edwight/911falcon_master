@extends('base')

@section('recepcion')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Registar</div>
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
                        {!! Form::open(['action' =>'Operadores\RecepcionController@store','class'=>'form-horizontal','role'=>'form']) !!}
                            <div class="form-group">
                            {!!Form::label('telefono', 'Telefono', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('telefono', null,['class'=>'form-control','name'=>'telefono','placeholder'=>'telefono'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('nombre', null,['class'=>'form-control','name'=>'nombre','placeholder'=>'Nombre'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellido', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('apellido', null,['class'=>'form-control','name'=>'apellido','placeholder'=>'Apellido'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('cedula', 'cedula', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('cedula', null,['class'=>'form-control','name'=>'cedula','placeholder'=>'Cedula'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('municipio', 'Municipio', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('municipio', null,['class'=>'form-control','name'=>'municipio','placeholder'=>'Municipio'] ) !!}
                            </div>
                        </div>

                         <div class="form-group">
                            {!! Form::label('parroquia', 'Parroquia', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('parroqua', null,['class'=>'form-control','name'=>'parroquia','placeholder'=>'Parroquia'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::textarea('descripcion', null,['class'=>'form-control','name'=>'descripcion'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('motivos', 'Motivos', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::text('motivos', null,['class'=>'form-control','name'=>'motivos'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Direccion', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::textarea('direccion', null,['class'=>'edit','name'=>'direccion'] ) !!}
                            </div>
                        </div>
                       <div class="form-group">
                            {!! Form::label('p_referencia', 'Punto de Referencia', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-10">
                                {!! Form::textarea('p_referencia', null,['class'=>'edit','name'=>'p_referencia'] ) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('organismos', 'Organismos', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10 ">
                                {!! Form::checkbox('siipoll', 1) !!}
                            </div>
                        </div>
                        {!! Form::hidden('user_id', $user->id) !!}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-6">
                                {!! Form::submit('Save', ['name' => 'submit','class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

