<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\RegisterController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;


Route::get('/create-game', [GameController::class, 'created']);
Route::post('/create-game', [GameController::class, 'store'])->name('create-game');

Route::get('/login', [RegisterController::class,'index'])->name('login');
Route::post('/login', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('app');
});
