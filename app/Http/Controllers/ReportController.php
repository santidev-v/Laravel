<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function monthly(?string $mes = null)
    {
        $mesesDisponibles = ['enero', 'febrero', 'marzo'];

        $resumenes = [
            'enero' => [
                'totalReservas' => 18,
                'totalIngresos' => 1240000,
            ],
            'febrero' => [
                'totalReservas' => 21,
                'totalIngresos' => 1530000,
            ],
            'marzo' => [
                'totalReservas' => 16,
                'totalIngresos' => 1135000,
            ],
        ];

        $mes = $mes ? strtolower($mes) : null;
        $resumen = $mes ? ($resumenes[$mes] ?? null) : null;

        return view('reports.monthly', [
            'mes' => $mes,
            'mesesDisponibles' => $mesesDisponibles,
            'resumen' => $resumen,
        ]);
    }
}
