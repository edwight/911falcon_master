{!! Form::open(array('action' => 'ContactoController@store', 'method' => 'post')) !!}
	{!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name') !!}

    {!! Form::label('phone', 'Telefono') !!}
    {!! Form::text('phone') !!}
 <!--    direccion -->
 	{!! Form::label('municipio', 'Municipio') !!}
    {!! Form::text('municipio') !!}
    {!! Form::label('parroquia', 'Parroquia') !!}
    {!! Form::text('parroquia') !!}
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::textarea('direccion') !!}
    
    {!! Form::label('p_referencia', 'Punto de Referencia') !!}
    {!! Form::textarea('p_referencia') !!}
 	<!--   end direccion -->
 	<!--   motivos -->
    {!! Form::label('motivos', 'Motivos') !!}
    {!! Form::textarea('motivos') !!}
    {!! Form::label('descripcion', 'Descripcion') !!}
    {!! Form::textarea('descripcion') !!}
    <!--   end motivos -->
     {!! Form::label('phonec', 'Telefono de Contacto') !!}
    {!! Form::text('phonec') !!}
    {!! Form::submit('Click Me!') !!}
{!! Form::close() !!}