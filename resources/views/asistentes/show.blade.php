@extends('layouts.plantilla')

@section('contenido')
<section id="main">
    <article>
        <h2>Detalle del Asistente</h2>
        <p><strong>Nombre:</strong> {{ $asistente->nombre }}</p>
        <p><strong>Empresa:</strong> {{ $asistente->empresa }}</p>
        <p><strong>Email:</strong> {{ $asistente->email }}</p>
        <p><strong>Tipo:</strong> {{ $asistente->tipo_peticion }}</p>
        <p><strong>Comentario:</strong> {{ $asistente->comentario }}</p>
        <p><strong>Suscrito:</strong> {{ $asistente->suscripcion ? 'Sí' : 'No' }}</p>
        <p><strong>Referencia:</strong> {{ $asistente->referencia }}</p>
        <a href="{{ route('asistentes.index') }}">Volver a la lista</a>
    </article>
</section>
@endsection
