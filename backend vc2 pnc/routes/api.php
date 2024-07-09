<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PlaceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingHotelController;

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
Route::post('/register', [AuthController::class, 'register']);
Route::get('/me', [AuthController::class, 'index'])->middleware('auth:sanctum');
Route::get('/post/list', [PostController::class, 'index'])->middleware('auth:sanctum');
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
//user
Route::get('/users/role/{role}', [AuthController::class, 'getUsersByRole']);
Route::get('/users/all', [AuthController::class, 'getAll']);
Route::put('/users/{id}', [AuthController::class, 'edit']);
Route::delete('/user/{id}', [AuthController::class, 'delete']);
Route::get('/user/{id}', [AuthController::class, 'detail']);
Route::get('/users/{id}', [AuthController::class, 'showDetail']);

// routes/api.php
Route::post('/addVehicle', [VehicleController::class, 'addVehicle'])->middleware('auth:sanctum');
Route::get('/vehicles', [VehicleController::class, 'getVehiclesByCompany'])->middleware('auth:sanctum');
Route::get('/vehicles-all', [VehicleController::class, 'getVehicleBooking']);
Route::get('/vehicles', [VehicleController::class, 'getAllVehicles'])->middleware('auth:sanctum');
Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->middleware('auth:sanctum');
Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->middleware('auth:sanctum');

// booking car
Route::post('/add-driver', [AuthController::class, 'addDriver'])->middleware('auth:sanctum');
Route::post('/bookingCar', [BookingController::class, 'bookingCar'])->middleware('auth:sanctum');
Route::get('/recordBooking', [BookingController::class, 'recordOne'])->middleware('auth:sanctum');
Route::get('/recordAll', [BookingController::class, 'recordAll']);
Route::put('/bookings/{booking}/accept', [BookingController::class, 'acceptBooking']);
Route::get('/vehicles/{userId}', [VehicleController::class, 'getVehicles']);



//Place 
Route::post('/places', [PlaceController::class, 'store']);
Route::get('/getAllPlce', [PlaceController::class, 'getAllPlce']);

//room
Route::post('/rooms', [RoomController::class, 'store']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);
Route::get('/users/{userId}/rooms', [RoomController::class, 'index']);
Route::put('/rooms/{id}', [RoomController::class, 'update']);
Route::delete('/rooms/{id}', [RoomController::class, 'destroy']);

//booking room 
Route::post('/bookingRoom', [BookingHotelController::class, 'store']);
