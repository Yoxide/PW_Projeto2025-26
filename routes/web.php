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

Route::middleware('auth')->get('/dashboard', function () {
    return match (auth()->user()->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'coordinator' => redirect()->route('coordinator.dashboard'),
        'operational' => redirect()->route('operational.dashboard'),
        default => redirect()->route('home'),
    };
})->name('dashboard');


//Route::get('/login', function () {return view('login');})->name('login');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');

    Route::view('/users', 'admin.users-index')->name('admin.users.index');
    Route::view('/users/create', 'admin.users-create')->name('admin.users.create');
    Route::view('/users/{id}/edit', 'admin.users-edit')->name('admin.users.edit');

    Route::view('/sections', 'admin.sections')->name('admin.sections.index');
    Route::view('/teams', 'admin.teams')->name('admin.teams.index');
});

//coordenador
Route::middleware(['auth', 'role:coordinator'])->prefix('coordinator')->group(function () {
    Route::view('/dashboard', 'coordinator.dashboard')->name('coordinator.dashboard');
    Route::view('/agendamentos', 'coordinator.agendamentos')->name('coordinator.agendamentos');
    Route::view('/atribuicoes', 'coordinator.atribuicoes')->name('coordinator.atribuicoes');
    Route::view('/checklist', 'coordinator.checklist')->name('coordinator.checklist');
    Route::view('/uploads', 'coordinator.uploads')->name('coordinator.uploads');
});

/* operacional */
Route::middleware(['auth', 'role:operational'])->prefix('operational')->group(function () {
    Route::view('/dashboard', 'operational.dashboard')->name('operational.dashboard');
    Route::view('/tarefas', 'operational.tarefas')->name('operational.tarefas');
    Route::view('/checklist', 'operational.checklist')->name('operational.checklist');
    Route::view('/uploads', 'operational.uploads')->name('operational.uploads');
});

