<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MatpelController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/hello', function () {
    return view('hello');
});


route::get('/user', [UserController::class, 'index']);
route::get('/siswa', [SiswaController::class, 'index']);
route::get('/kelas', [KelasController::class, 'index']);
route::get('/matpel', [MatpelController::class, 'index']);