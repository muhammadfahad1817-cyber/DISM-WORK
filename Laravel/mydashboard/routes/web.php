<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello/{name}', function ($name) {
    // echo "<h3> Hello " . $name . "</h3>";

    return view('index', ['name' => $name]);
});


Route::get("/displayUser/{id}", [UserController::class, 'displayUser']);