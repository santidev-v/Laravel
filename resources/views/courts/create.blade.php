@extends('layouts.app')

@section('title', 'Nueva cancha')

@section('content')
    <h1>Nueva cancha (simulado)</h1>
    <p class="muted">Este formulario es solo de demostracion (GET), no guarda datos.</p>

    <form method="GET" action="{{ route('courts.create') }}">
        <p>
            <label>Nombre</label><br>
            <input type="text" name="nombre" placeholder="Ej. Tenis C">
        </p>

        <p>
            <label>Tipo</label><br>
            <input type="text" name="tipo" placeholder="Ej. Tenis">
        </p>

        <p>
            <label>Precio por hora</label><br>
            <input type="number" name="precioHora" placeholder="Ej. 30000">
        </p>

        <button type="submit">Enviar (simulado)</button>
    </form>

    <p><a href="{{ route('courts.index') }}">Volver a canchas</a></p>
@endsection
