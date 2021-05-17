<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;

use App\Http\Controllers\PetController;
use App\Http\Controllers\PetKindBreedController;
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



Route::get("/pet/kinds", [PetKindBreedController::class, 'index']);
Route::get("/pet/{kind}/breeds", [PetKindBreedController::class, 'show']);

Route::get("/sitter/pets", [PetController::class, 'index']);
Route::get("/pet/profile/{id}", [PetController::class, 'show']);

Route::post("/account/user/details", [UserController::class, 'store'])->middleware('auth:sanctum');

Route::post("/account/login", [AuthenticatedSessionController::class, 'store']);
Route::post("/account/register", [RegisteredUserController::class, 'store']);
Route::post("/account/logout", [AuthenticatedSessionController::class, 'destroy']);
Route::post("/account/email/verification/send", [EmailVerificationNotificationController::class, 'store'])->middleware('auth:sanctum');
