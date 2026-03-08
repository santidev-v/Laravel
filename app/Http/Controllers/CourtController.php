<?php

namespace App\Http\Controllers;

class CourtController extends Controller
{
    private function getCourts(): array
    {
        return [
            [
                'id' => 1,
                'nombre' => 'Tenis A',
                'tipo' => 'Tenis',
                'precioHora' => 25000,
            ],
            [
                'id' => 2,
                'nombre' => 'Futbol 5',
                'tipo' => 'Futbol',
                'precioHora' => 90000,
            ],
            [
                'id' => 3,
                'nombre' => 'Tenis B',
                'tipo' => 'Tenis',
                'precioHora' => 22000,
            ],
        ];
    }

    public function index()
    {
        $canchas = $this->getCourts();

        return view('courts.index', ['canchas' => $canchas]);
    }

    public function create()
    {
        return view('courts.create');
    }

    public function show(int $id)
    {
        $cancha = collect($this->getCourts())->firstWhere('id', $id);

        return view('courts.show', [
            'cancha' => $cancha,
            'id' => $id,
        ]);
    }
}
