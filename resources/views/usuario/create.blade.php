@extends('layouts.principal')

@section('contenido')

{!!Form::open(['url' => 'Usuario', 'method' => 'post'])!!}
    <div class ="form-group">
        {!! Form::label('nombre', 'Nombre de Usuario' ) !!}
        {!! Form::text('nombre') !!}
    </div>
    <div class ="form-group">
        {!! Form::label('clave', 'Clave') !!}    
        {!! Form::text('clave') !!}
    </div>

    <div class ="form-group">
        {!! Form::submit('Guardar') !!}
    </div>

{!!Form::close()!!}

@endsection