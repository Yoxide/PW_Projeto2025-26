<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchedulingController;

Route::get('/', function () {
    return view('welcome');})->name('home');

Route::get('/agendamentos', [SchedulingController::class, 'index'])->name('schedulings.index');
Route::get('/agendamentos/novo', [SchedulingController::class, 'create'])->name('schedulings.create');
Route::post('/agendamentos', [SchedulingController::class, 'store'])->name('schedulings.store');

Route::get('/login', function () {return view('schedulings.login');})->name('schedulings.login');

Route::prefix('admin')->group(function () {

    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');

    // Users
    Route::view('/users', 'admin.users-index')->name('admin.users.index');
    Route::view('/users/create', 'admin.users-create')->name('admin.users.create');
    Route::view('/users/{id}/edit', 'admin.users-edit')->name('admin.users.edit');

    // Sections
    Route::view('/sections', 'admin.sections')->name('admin.sections.index');

    // Teams
    Route::view('/teams', 'admin.teams')->name('admin.teams.index');
});
