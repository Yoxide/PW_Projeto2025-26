<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchedulingController;

Route::get('/', function () {
    return view('welcome');})->name('home');

Route::get('/agendamentos', [SchedulingController::class, 'index'])->name('schedulings.index');
Route::get('/agendamentos/novo', [SchedulingController::class, 'create'])->name('schedulings.create');
Route::post('/agendamentos', [SchedulingController::class, 'store'])->name('schedulings.store');
