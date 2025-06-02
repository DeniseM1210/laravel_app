<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('login');
});

Route::get('/index', [AlumnoController::class, 'index'])->name('index');

Route::resource('alumnos', AlumnoController::class);


