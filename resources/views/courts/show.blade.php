@extends('layouts.app')

@section('title', 'Detalle cancha')

@section('content')
    <h1>Detalle de cancha</h1>

    @if ($cancha)
        <p><strong>ID:</strong> {{ $cancha['id'] }}</p>
        <p><strong>Nombre:</strong> {{ $cancha['nombre'] }}</p>
        <p><strong>Tipo:</strong> {{ $cancha['tipo'] }}</p>
        <p><strong>Precio por hora:</strong> ${{ number_format($cancha['precioHora'], 0, ',', '.') }}</p>
    @else
        <p>No encontrado: cancha con ID {{ $id }}.</p>
    @endif

    <p><a href="{{ route('courts.index') }}">Volver a canchas</a></p>
@endsection
