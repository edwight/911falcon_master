@extends('base')

@section('adminModule')
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
                        <div class="form-group">
                            <h4>id</h4>
                            <div class="col-md-6">
                               {{$user->id}}
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>nombre</h4>
                            <div class="col-md-6">
                                {{$user->name}}
                            </div>
                        </div>

                        <div class="form-group">
                              <h4>password</h4>
                            <div class="col-md-6">
                                *****
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Telefono</h4>
                            <div class="col-md-6">
                                {{$user->phone}}
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Grupo</h4>
                            <div class="col-md-6">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>roles</h4>
                            <div class="col-md-6">
                                {{$user->roles}}
                            </div>
                        </div>
                    </div>
@endsection