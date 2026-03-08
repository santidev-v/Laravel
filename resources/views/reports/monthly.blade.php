@extends('layouts.app')

@section('title', 'Reportes')

@section('content')
    <h1>Reporte mensual</h1>

    @if (!$mes)
        <p>Seleccione mes:</p>
        <ul>
            @foreach ($mesesDisponibles as $mesDisponible)
                <li>
                    <a href="{{ route('reports.monthly', ['mes' => $mesDisponible]) }}">
                        {{ ucfirst($mesDisponible) }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        @if ($resumen)
            <p><strong>Mes:</strong> {{ ucfirst($mes) }}</p>
            <p><strong>Total reservas:</strong> {{ $resumen['totalReservas'] }}</p>
            <p><strong>Total ingresos:</strong> ${{ number_format($resumen['totalIngresos'], 0, ',', '.') }}</p>
        @else
            <p>No encontrado: no hay reporte para el mes "{{ $mes }}".</p>
        @endif

        <p><a href="{{ route('reports.monthly') }}">Volver a seleccion de mes</a></p>
    @endif
@endsection
