<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/canchas', [CourtController::class, 'index'])->name('courts.index');
Route::get('/canchas/nueva', [CourtController::class, 'create'])->name('courts.create');
Route::get('/canchas/{id}', [CourtController::class, 'show'])->whereNumber('id')->name('courts.show');

Route::get('/reservas', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/reservas/crear', [BookingController::class, 'create'])->name('bookings.create');
Route::get('/reservas/{id}', [BookingController::class, 'show'])->whereNumber('id')->name('bookings.show');

Route::get('/reportes/{mes?}', [ReportController::class, 'monthly'])->name('reports.monthly');
