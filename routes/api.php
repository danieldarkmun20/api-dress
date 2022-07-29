<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DressModelController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'users'

], function ($router) {

    Route::get('/', [UserController::class, 'index']); 
    Route::get('get/{id}', [UserController::class, 'get']); 
    Route::post('/', [UserController::class, 'store']); 
    Route::put('/', [UserController::class, 'update']); 
    Route::delete('/{id}', [UserController::class, 'destroy']); 
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'dressmodels'

], function ($router) {

    Route::get('/', [DressModelController::class, 'index']); 
    Route::get('get/{id}', [DressModelController::class, 'get']); 
    Route::post('/', [DressModelController::class, 'store']); 
    Route::put('/', [DressModelController::class, 'update']); 
    Route::delete('/{id}', [DressModelController::class, 'destroy']); 
});

