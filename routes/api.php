<?php

use App\Http\Controllers\Api\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('games', [Api\GameController::class, 'index']);
Route::get('extensions', [Api\ExtensionController::class, 'index']);

Route::get('/create-game', [Api\GameController::class, 'a']);
Route::post('newgame', [Api\GameController::class, 'create']);

Route::get('getGame', [Api\GameController::class, 'getContent']);


Route::post('login', [Api\RegisterController::class, 'store'])->middleware('guest');
Route::get('enter', [Api\RegisterController::class, 'show']);

Route::post('logInAccont', [Api\RegisterController::class, 'login'])->middleware('guest');
Route::post('logout', [Api\SessionsController::class, 'destroy']);

//Route::get('games/create', [Api\GameController::class, 'create']);
