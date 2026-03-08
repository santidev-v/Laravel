@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Inicio</h1>
    <p>Mini-sistema de reservas de canchas (Laravel 12).</p>

    <ul>
        <li><a href="{{ route('courts.index') }}">Ir a canchas</a></li>
        <li><a href="{{ route('bookings.index') }}">Ir a reservas</a></li>
        <li><a href="{{ route('reports.monthly') }}">Ver reportes</a></li>
    </ul>
@endsection
