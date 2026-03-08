@extends('layouts.app')

@section('title', 'Detalle reserva')

@section('content')
    <h1>Detalle de reserva</h1>

    @if ($reserva)
        <p><strong>ID:</strong> {{ $reserva['id'] }}</p>
        <p><strong>Cancha:</strong> {{ $reserva['cancha'] }}</p>
        <p><strong>Fecha:</strong> {{ $reserva['fecha'] }}</p>
        <p><strong>Hora:</strong> {{ $reserva['hora'] }}</p>
        <p><strong>Cliente:</strong> {{ $reserva['cliente'] }}</p>
        <p><strong>Valor:</strong> ${{ number_format($reserva['valor'], 0, ',', '.') }}</p>
    @else
        <p>No encontrado: reserva con ID {{ $id }}.</p>
    @endif

    <p><a href="{{ route('bookings.index') }}">Volver a reservas</a></p>
@endsection
