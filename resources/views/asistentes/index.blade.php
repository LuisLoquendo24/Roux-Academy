@extends('layouts.plantilla')

@section('contenido')
<section id="main">
    <article>
        <h2>Lista de Asistentes</h2>
        <a href="{{ route('register') }}" class="link">Agregar nuevo asistente</a>
        <ul>
            @foreach ($asistentes as $asistente)
                <li>
                    {{ $asistente->nombre }} - {{ $asistente->email }}
                    <a href="{{ route('asistentes.show', $asistente->id) }}">Ver</a> |
                    <a href="{{ route('asistentes.edit', $asistente->id) }}">Editar</a> |
                    <form action="{{ route('asistentes.destroy', $asistente->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Eliminar este asistente?')">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </article>
</section>
@endsection


