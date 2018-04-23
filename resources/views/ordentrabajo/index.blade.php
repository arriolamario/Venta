@extends('layouts.principal')

@section('contenido')
@include('modal.AddDetalle', ['detalles' => $detalles])
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddDetalle">
  Agregar
</button>


<table class="table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Cant.</th>
            <th>Precio Unit.</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        @foreach($detalles as $item)
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        @endforeach
       
       
    </tbody>
</table>


@endsection;