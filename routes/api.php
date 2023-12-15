<?php

use App\Http\Controllers\PlantaController;
use App\Http\Controllers\ZombieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(PlantaController::class)->group(function(){
    Route::get('/plants', 'index');
    Route::get('/plants/{id}', 'show');
});

Route::controller(ZombieController::class)->group(function(){
    Route::get('/zombies', 'index');
    Route::get('/zombies/{id}', 'show');
});



