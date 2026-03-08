<?php

namespace App\Http\Controllers;

class BookingController extends Controller
{
    private function getBookings(): array
    {
        return [
            [
                'id' => 101,
                'cancha' => 'Tenis A',
                'fecha' => '2026-03-05',
                'hora' => '18:00',
                'cliente' => 'Luis',
                'valor' => 25000,
            ],
            [
                'id' => 102,
                'cancha' => 'Futbol 5',
                'fecha' => '2026-03-10',
                'hora' => '20:00',
                'cliente' => 'Ana',
                'valor' => 90000,
            ],
            [
                'id' => 103,
                'cancha' => 'Tenis B',
                'fecha' => '2026-03-12',
                'hora' => '17:00',
                'cliente' => 'Carlos',
                'valor' => 22000,
            ],
        ];
    }

    public function index()
    {
        $reservas = $this->getBookings();

        return view('bookings.index', ['reservas' => $reservas]);
    }

    public function create()
    {
        $canchas = ['Tenis A', 'Futbol 5', 'Tenis B'];

        return view('bookings.create', ['canchas' => $canchas]);
    }

    public function show(int $id)
    {
        $reserva = collect($this->getBookings())->firstWhere('id', $id);

        return view('bookings.show', [
            'reserva' => $reserva,
            'id' => $id,
        ]);
    }
}
