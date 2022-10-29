@extends('templates.plantilla')
@section('eltitulo', 'Productos')
@section('elcontenido')
    <h2>Listado de Productos</h2>
    <table class="table table-striped">
        <thead class="table-dark">
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Ver</th>
        </thead>
    
        @foreach ($productos as $p)
        <tr>
            <td>{{$p->nombre}}</td>
            <td>{{$p->descripcion}}</td>
            <td>{{$p->precio}}</td>
            <td><a href={{ route('productos.show', ['producto'=>$p]) }}>ver</a></td>

        </tr>
        @endforeach
    </table>

    {{ $productos->links() }}
@endsection