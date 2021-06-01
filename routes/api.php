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
use App\Http\Controllers\UserMediaController;
use App\Http\Controllers\SitterController;
use App\Http\Controllers\SitterPetChoicesController;
use App\Http\Controllers\SitterRequestController;
use App\Http\Controllers\SitterReviewController;

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


Route::middleware(['auth:sanctum'])->group(function(){
    Route::get("/pet-kinds", [PetKindBreedController::class, 'index']);
    Route::get("/pet-kinds/{kind}/breeds", [PetKindBreedController::class, 'show']);
    
    Route::get("/pets", [PetController::class, 'index']);
    Route::post("/pets", [PetController::class, 'store']);
    Route::get("/pets/{userId}", [PetController::class, 'show']);
    Route::get("/pets/{userId}/requests", [PetController::class, 'showPetRequests']);
    Route::get("/pets/{userId}/image", [PetController::class, 'showImage']);
    
    Route::get("/users-media/{userId}", [UserMediaController::class, 'show']);
    Route::post("/users-media", [UserMediaController::class, 'store']);
    Route::post("/users-media/{userId}", [UserMediaController::class, 'update']);
    Route::get("/users-media/images/{imageFileName}", [UserMediaController::class, 'showImage']);
    
    Route::get("/user", [UserController::class, 'index']);
    Route::get("/user/{id}", [UserController::class, 'show']);
    Route::post("/user/{id}/status", [UserController::class, 'updateStatus']);
    Route::get("/user/{id}/pets", [UserController::class, 'showUserPets']);
    
    Route::post("/sitters", [SitterController::class, 'store']);
    Route::get("/sitters/{userId}", [SitterController::class, 'show']);
    Route::get("/sitters/{userId}/requests", [SitterController::class, 'showSitterRequests']);
    Route::post("/sitters/{userId}", [SitterController::class, 'update']);
    
    Route::post("/sitter-preferences", [SitterPetChoicesController::class, 'store']);
    Route::get("/sitter-preferences/{userId}", [SitterPetChoicesController::class, 'show']);
    Route::post("/sitter-preferences/{userId}", [SitterPetChoicesController::class, 'update']);
    
    Route::get("/sitter-requests", [SitterRequestController::class, 'index']);
    Route::post("/sitter-requests", [SitterRequestController::class, 'store']);
    Route::get("/sitter-requests/{sitterRequestId}", [SitterRequestController::class, 'show']);
    Route::post("/sitter-requests/{sitterRequestId}", [SitterRequestController::class, 'update']);
    Route::delete("/sitter-requests/{sitterRequestId}", [SitterRequestController::class, 'delete']);
    
    Route::post("/sitter-reviews", [SitterReviewController::class, 'store']);
    Route::get("/sitter-reviews/{sitterId}", [SitterReviewController::class, 'show']);
});

Route::post("/login", [AuthenticatedSessionController::class, 'store']);
Route::post("/logout", [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');
Route::post("/register", [RegisteredUserController::class, 'store']);
Route::post("/forgot-password", [PasswordResetLinkController::class, 'store']);
Route::post('/reset-password', [NewPasswordController::class, 'store']);
Route::post("/email-verification", [EmailVerificationNotificationController::class, 'store'])->middleware('auth:sanctum');