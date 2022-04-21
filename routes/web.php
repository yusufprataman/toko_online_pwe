<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KbsController;
use App\Http\Controllers\PmoController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LifeController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\MubesController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ChromeController;
use App\Http\Controllers\SurvivalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile', function () {
    echo ('welcome');
});

Route::get('/beranda', function () {
    echo ('halo');
});

Route::get('/minyakmahal', function () {
    echo ('pertamax');
});

Route::get('/minyakmurah', function () {
    echo ('pertalite');
});

Route::get('/minyaktruk', function () {
    echo ('solar');
});

Route::get('/minyakmasak', function () {
    echo ('sunco');
});

Route::get('/universitasbengkulu', function () {
    echo ('unib');
});

Route::get('/universitassumaterabarat', function () {
    echo ('unand');
});

Route::get('/universitassumaterautara', function () {
    echo ('usu');
});

Route::get('/universitasjawabarat', function () {
    echo ('itb');
});

Route::get('/toko', [TokoController::class, 'tokoonline']);

Route::get('/kbs', [KbsController::class, 'tokoonline']);

Route::get('/chrome', [ChromeController::class, 'tokoonline']);

Route::get('/game', [GameController::class, 'tokoonline']);

Route::get('/life', [LifeController::class, 'tokoonline']);

Route::get('/mubes', [MubesController::class, 'tokoonline']);

Route::get('/music', [MusicController::class, 'tokoonline']);

Route::get('/peta', [PetaController::class, 'tokoonline']);

Route::get('/pmo', [PmoController::class, 'tokoonline']);

Route::get('/survival', [SurvivalController::class, 'tokoonline']);