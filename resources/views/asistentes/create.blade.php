@extends('layouts.plantilla')

@section('contenido')
<section id="main">
    <article>
        <h2>Nuevo Asistente</h2>
        <form method="POST" action="{{ route('asistentes.store') }}">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Empresa:</label>
            <input type="text" name="empresa" required>

            <label>Comentario:</label>
            <input type="text" name="comentario" required>

            <br>
            <input type="submit" value="Guardar">
        </form>
    </article>
</section>
@endsection



