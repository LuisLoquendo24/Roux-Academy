@extends('layouts.plantilla')

@section('contenido')
<section id="main">
  <article>
    <h2>Editar Asistente</h2>
    <form action="{{ route('asistentes.update', $asistente) }}" method="POST">
      @csrf @method('PUT')
      <label>Nombre *</label>
      <input type="text" name="nombre" value="{{ $asistente->nombre }}" required><br>

      <label>Empresa</label>
      <input type="text" name="empresa" value="{{ $asistente->empresa }}"><br>

      <label>Email *</label>
      <input type="email" name="email" value="{{ $asistente->email }}" required><br>

      <label>Tipo de Solicitud</label><br>
      <input type="radio" name="tipo_peticion" value="question" {{ $asistente->tipo_peticion == 'question' ? 'checked' : '' }}>Pregunta
      <input type="radio" name="tipo_peticion" value="comment" {{ $asistente->tipo_peticion == 'comment' ? 'checked' : '' }}>Comentario<br>

      <label>Comentario</label><br>
      <textarea name="comentario">{{ $asistente->comentario }}</textarea><br>

      <label>¿Suscribirse?</label>
      <input type="checkbox" name="suscripcion" value="1" {{ $asistente->suscripcion ? 'checked' : '' }}><br>

      <label>Referencia</label>
      <select name="referencia">
        <option value="friend" {{ $asistente->referencia == 'Friend' ? 'selected' : '' }}>Un amigo</option>
        <option value="facebook" {{ $asistente->referencia == 'Facebook' ? 'selected' : '' }}>Facebook</option>
        <option value="twitter" {{ $asistente->referencia == 'Twitter' ? 'selected' : '' }}>Twitter</option>
      </select><br>

      <input type="submit" value="Actualizar">
    </form>
  </article>
</section>
@endsection


