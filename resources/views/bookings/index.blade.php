@extends('layouts.app')

@section('title', 'Reservas')

@section('content')
    <h1>Lista de reservas</h1>
    <a class="btn" href="{{ route('bookings.create') }}">Crear reserva (simulado)</a>

    @if (count($reservas) === 0)
        <p class="muted">No hay reservas registradas.</p>
    @else
        <ul>
            @foreach ($reservas as $reserva)
                <li>
                    #{{ $reserva['id'] }} - {{ $reserva['cancha'] }} - {{ $reserva['fecha'] }} {{ $reserva['hora'] }}
                    ({{ $reserva['cliente'] }})
                    | <a href="{{ route('bookings.show', ['id' => $reserva['id']]) }}">Ver detalle</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
