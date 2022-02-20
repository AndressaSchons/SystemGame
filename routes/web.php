<?php

use App\Http\Controllers\RegistrerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

//Route::get('game', function ($slug) {
//    $path = __DIR__ . "/../resources/games/{$slug}.html";
//
//    if (!file_exists($path)) {
//        ddd('file does not exist');
//    }
//
//    $game = file_get_contents($path);
//
//    return view('game', [
//        'game' => $game
//    ]);
//});

Route::get('game', function (){
    return view('game', [
        'game' => '<h1>Olá</h1>'
    ]);
});

Route::get('login', [RegistrerController::class, 'create']);
Route::post('login', [RegistrerController::class, 'store']);
