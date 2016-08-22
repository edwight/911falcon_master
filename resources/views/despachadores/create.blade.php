@extends('base')

@section('adminModule')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
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

						<div class="col-xs-2">
						    <input type="text" class="form-control" placeholder=".col-xs-2">
						</div>
					  	<div class="col-xs-3">
					    	<input type="text" class="form-control" placeholder=".col-xs-3">
					  	</div>
					  	<div class="col-xs-4">
					    	<input type="text" class="form-control" placeholder=".col-xs-4">
					  	</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection