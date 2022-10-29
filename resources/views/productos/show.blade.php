@extends('templates.plantilla')
@section('eltitulo', 'Producto '.$producto->id)
@section('elcontenido')
<div class="container">
    <div class="row text-center mt-3">
        <h2>Datos del Producto con id: {{ $producto->id }}</h2>
        <h4><b>Nombre:</b> {{ $producto->nombre }}</h4>
        <h4><b>Descripcion:</b> {{ $producto->descripcion }}</h4>
        <h4><b>Precio:</b> {{ $producto->precio }}</h4>
    </div>
</div>
@endsection