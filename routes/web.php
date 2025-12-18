<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchedulingController;
use App\Http\Controllers\LodgingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController as  AdminDashboardController;
use App\Http\Controllers\Coordinator\DashboardController as  CoordinatorDashboardController;
use App\Http\Controllers\Operational\DashboardController as OperationalDashboardController;


Route::get('/', function () {
    return view('welcome');})->name('home');
// Rotas padrao CRUD
Route::resource('schedulings', SchedulingController::class);
Route::resource('agendamentos', SchedulingController::class)
    ->parameters(['agendamentos' => 'scheduling'])
    ->names('schedulings');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('lodgings', LodgingController::class);
});

Route::middleware('auth')->get('/dashboard', function () {
    return match (auth()->user()->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'coordinator' => redirect()->route('coordinator.dashboard'),
        'operational' => redirect()->route('operational.dashboard'),
        default => redirect()->route('home'),
    };
})->name('dashboard');


//Route::get('/login', function () {return view('login');})->name('login');


Route::prefix('admin')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('admin.dashboard');;

        // Users (CRUD + role management)
        Route::resource('users', UserController::class)
            ->names('admin.users');

        // Sections
        Route::view('/sections', 'admin.sections')
            ->name('admin.sections.index');

        // Teams
        Route::view('/teams', 'admin.teams')
            ->name('admin.teams.index');
    });


//coordenador
Route::middleware(['auth', 'role:coordinator'])->prefix('coordinator')->group(function () {
    Route::get('/dashboard', [CoordinatorDashboardController::class, 'index'])
        ->name('coordinator.dashboard');
    Route::view('/agendamentos', 'coordinator.agendamentos')->name('coordinator.agendamentos');
    Route::view('/atribuicoes', 'coordinator.atribuicoes')->name('coordinator.atribuicoes');
    Route::view('/checklist', 'coordinator.checklist')->name('coordinator.checklist');
    Route::view('/uploads', 'coordinator.uploads')->name('coordinator.uploads');
});

/* operacional */
Route::middleware(['auth', 'role:operational'])
    ->prefix('operational')
    ->group(function () {
        Route::get('/dashboard', [OperationalDashboardController::class, 'index'])
            ->name('operational.dashboard');
    Route::view('/tarefas', 'operational.tarefas')->name('operational.tarefas');
    Route::view('/checklist', 'operational.checklist')->name('operational.checklist');
    Route::view('/uploads', 'operational.uploads')->name('operational.uploads');
});

