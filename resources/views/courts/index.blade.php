@extends('layouts.app')

@section('title', 'Canchas')

@section('content')
    <h1>Lista de canchas</h1>
    <a class="btn" href="{{ route('courts.create') }}">Nueva cancha (simulado)</a>

    @if (count($canchas) === 0)
        <p class="muted">No hay canchas registradas.</p>
    @else
        <ul>
            @foreach ($canchas as $cancha)
                <li>
                    <strong>{{ $cancha['nombre'] }}</strong>
                    ({{ $cancha['tipo'] }}) - ${{ number_format($cancha['precioHora'], 0, ',', '.') }}/hora
                    | <a href="{{ route('courts.show', ['id' => $cancha['id']]) }}">Ver detalle</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
