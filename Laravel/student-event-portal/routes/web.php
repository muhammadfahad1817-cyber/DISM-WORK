<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventController;

Route::get('/', [eventController::class, 'index']);
Route::get('/events', [eventController::class, 'events']);
