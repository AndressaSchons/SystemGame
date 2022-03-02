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
Route::post('new-game', [Api\GameController::class, 'create']);
Route::get('get-game/{id}', [Api\GameController::class, 'getGame']);
Route::delete('get-game/{id}', [Api\GameController::class, 'destroy']);
Route::put('update-game/{id}', [Api\GameController::class, 'update']);

Route::post('login', [Api\RegisterController::class, 'store']);
//Route::get('enter', [Api\RegisterController::class, 'show']);

Route::post('logInAccount', [Api\RegisterController::class, 'login']);
Route::post('logout', [Api\RegisterController::class, 'destroy']);
