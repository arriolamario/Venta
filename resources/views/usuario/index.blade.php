@extends('layouts.principal')

@section('contenido')

<h1>Index Usuario</h1>


<table class="table"> 
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Password</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $user)
        <tr>
            <th scope="row">{!! $user->id !!}</th>
            <td>{!! $user->nombre !!}</td>
            <td>{!! $user->clave !!}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection