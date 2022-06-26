<?php

use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuario/contador', 'contador');
});

Route::controller(SolicitudController::class)->group(function(){
    Route::get('/solicitud/contador', 'contador');
});