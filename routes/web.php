<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('formulirpendaftaran', \App\Http\Controllers\FormulirPendaftaranController::class);
