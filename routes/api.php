<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/show", '\App\Http\Controllers\PetController@show')->middleware('auth:sanctum');

Route::post("/account/login", [AuthenticatedSessionController::class, 'store']);
Route::post("/account/register", [RegisteredUserController::class, 'store']);
Route::post("/account/logout", [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');
