<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Salmanbhai;

Route::get('/', [salmanbhai::class, 'index']);
Route::get('/add-user', [salmanbhai::class, 'adduserform']);
Route::post('/add-user', [salmanbhai::class, 'adduser']);

Route::get('/delete/{id}', [salmanbhai::class, 'delete'] );
Route::get('/edit/{id}', [salmanbhai::class, 'edit'] );
Route::post('/edit', [salmanbhai::class, 'update'] );

