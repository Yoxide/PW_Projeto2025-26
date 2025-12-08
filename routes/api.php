<?php
use App\Http\Controllers\AgendamentoApiController;

Route::get('/agendamentos', [AgendamentoApiController::class, 'index']);
Route::post('/agendamentos', [AgendamentoApiController::class, 'store']);
Route::get('/agendamentos/{id}', [AgendamentoApiController::class, 'show']);
Route::put('/agendamentos/{id}', [AgendamentoApiController::class, 'update']);
Route::delete('/agendamentos/{id}', [AgendamentoApiController::class, 'destroy']);
