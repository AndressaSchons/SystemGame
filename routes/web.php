<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\RegisterController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/create-post', 'GameController@created');
Route::post('/create-post', 'GameController@store')->name('create-post');
