<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BookingController;
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
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class,'register']);
Route::get('/me', [AuthController::class, 'index'])->middleware('auth:sanctum');
Route::get('/post/list', [PostController::class, 'index'])->middleware('auth:sanctum');
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
//user 
Route::get('/users/role/{role}', [AuthController::class, 'getUsersByRole']);
Route::get('/users/all', [AuthController::class, 'getAll']);

// routes/api.php
Route::post('/addVehicle', [VehicleController::class, 'addVehicle'])->middleware('auth:sanctum');

// booking car
Route::post('/bookingCar',[BookingController::class, 'bookingCar'])->middleware('auth:sanctum');
Route::get('/recordBooking', [BookingController::class, 'recordOne'])->middleware('auth:sanctum');
Route::get('/recordAll', [BookingController::class, 'recordAll'])->middleware('auth:sanctum');