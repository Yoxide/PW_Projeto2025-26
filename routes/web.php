<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);

Route::get('/contacts',[EventController::class, 'index2']);

Route::get('/products/{id}', function ($id) {
    return view('products', ['id' => $id]);
});

Route::get('/events', [EventController::class, 'index3']);
