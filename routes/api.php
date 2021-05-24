<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

use App\Http\Controllers\PetController;
use App\Http\Controllers\PetKindBreedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersMediaController;
use App\Http\Controllers\SittersController;
use App\Http\Controllers\SitterPetChoicesController;

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



Route::get("/pet-kinds", [PetKindBreedController::class, 'index']);
Route::get("/pet-kinds/{kind}/breeds", [PetKindBreedController::class, 'show']);

Route::get("/pets", [PetController::class, 'index']);
Route::post("/pets", [PetController::class, 'store']);
Route::get("/pets/{userId}", [PetController::class, 'show']);
Route::get("/pets/{userId}/image", [PetController::class, 'showImage']);

Route::get("/users-media/{userId}", [UsersMediaController::class, 'show']);
Route::post("/users-media", [UsersMediaController::class, 'store']);
Route::post("/users-media/{userId}", [UsersMediaController::class, 'update']);
Route::get("/users-media/images/{imageFileName}", [UsersMediaController::class, 'showImage']);

Route::get("/user/{userId}", [UserController::class, 'show']);
Route::get("/user/{userId}/pets", [UserController::class, 'showUserPets']);

Route::get("/sitters/{userId}", [SittersController::class, 'show']);
Route::post("/sitters/{userId}", [SittersController::class, 'update']);

Route::get("/sitter-preferences/{userId}", [SitterPetChoicesController::class, 'show']);
Route::post("/sitter-preferences/{userId}", [SitterPetChoicesController::class, 'update']);

Route::post("/login", [AuthenticatedSessionController::class, 'store']);
Route::post("/logout", [AuthenticatedSessionController::class, 'destroy']);
Route::post("/register", [RegisteredUserController::class, 'store']);
Route::post("/forgot-password", [PasswordResetLinkController::class, 'store']);
Route::post('/reset-password', [NewPasswordController::class, 'store']);
Route::post("/email-verification", [EmailVerificationNotificationController::class, 'store'])->middleware('auth:sanctum');

