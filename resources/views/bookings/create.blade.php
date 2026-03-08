@extends('layouts.app')

@section('title', 'Crear reserva')

@section('content')
    <h1>Crear reserva (simulado)</h1>
    <p class="muted">Formulario GET de ejemplo. No persiste informacion.</p>

    <form method="GET" action="{{ route('bookings.create') }}">
        <p>
            <label>Cancha</label><br>
            <select name="cancha">
                @foreach ($canchas as $cancha)
                    <option value="{{ $cancha }}">{{ $cancha }}</option>
                @endforeach
            </select>
        </p>

        <p>
            <label>Fecha</label><br>
            <input type="date" name="fecha">
        </p>

        <p>
            <label>Hora</label><br>
            <input type="time" name="hora">
        </p>

        <p>
            <label>Cliente</label><br>
            <input type="text" name="cliente" placeholder="Nombre del cliente">
        </p>

        <button type="submit">Enviar (simulado)</button>
    </form>

    <p><a href="{{ route('bookings.index') }}">Volver a reservas</a></p>
@endsection
