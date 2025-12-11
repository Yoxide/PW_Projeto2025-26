<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchedulingController;
use App\Http\Controllers\LodgingController;

Route::get('/', function () {
    return view('welcome');})->name('home');
// Rotas padrao CRUD
Route::resource('schedulings', SchedulingController::class);
Route::resource('agendamentos', SchedulingController::class)
    ->parameters(['agendamentos' => 'scheduling'])
    ->names('schedulings');
Route::resource('lodgings', LodgingController::class);


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
