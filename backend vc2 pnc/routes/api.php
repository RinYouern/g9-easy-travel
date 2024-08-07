
<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackHotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PlaceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingHotelController;
use App\Models\BookingHotel;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;

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
Route::get('/users/rate/{role}', [AuthController::class, 'getUsersRate']);
Route::get('/drivers/{role}', [AuthController::class,'getDriver'])->middleware('auth:sanctum');
Route::get('/users/all', [AuthController::class, 'getAll']);
Route::put('/users/{id}', [AuthController::class, 'edit']);
Route::delete('/user/{id}', [AuthController::class, 'delete']);
Route::get('/user/{id}', [AuthController::class, 'detail']);
Route::get('/users/{id}', [AuthController::class, 'showDetail']);

// routes/api.php
Route::post('/addVehicle', [VehicleController::class, 'addVehicle'])->middleware('auth:sanctum');
Route::get('/vehicles', [VehicleController::class, 'getVehiclesByCompany'])->middleware('auth:sanctum');
Route::get('/getVehicleOneCompany/{id}', [VehicleController::class,'getVehicleOneCompany']);
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
Route::get('/places/top', [PlaceController::class, 'getTopPlaces']);
Route::get('places/{id}', [PlaceController::class, 'getPlaceById']);

//room
Route::post('/rooms', [RoomController::class, 'store']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);
Route::get('/users/{userId}/rooms', [RoomController::class, 'index']);
Route::put('/rooms/{id}', [RoomController::class, 'update']);
Route::delete('/rooms/{id}', [RoomController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/owner/bookings', [BookingHotelController::class, 'showOwnerBookings']);

//booking room 
Route::post('/bookingRoom', [BookingHotelController::class, 'store']);
//feedback hotel
Route::post('/feedback', [FeedbackHotelController::class, 'store']);
Route::get('/hotel/{userId}/feedback', [FeedbackHotelController::class, 'index']);
Route::put('/feedback/{id}', [FeedbackHotelController::class, 'update']);
// routes/api.php
Route::get('/user-bookings', [BookingHotelController::class, 'showUserBookings'])->middleware('auth:sanctum');

Route::get('/bookings/{id}', [BookingHotelController::class, 'show']);


Route::middleware('auth:sanctum')->group(function () {
    // Get all feedback
    Route::get('/feedback', [FeedbackController::class, 'index']);

    // Get a specific feedback by ID
    Route::get('/feedback/{id}', [FeedbackController::class, 'show']);

    // Create a new feedback
    Route::post('/feedback', [FeedbackController::class, 'store']);

    // Update a specific feedback by ID
    Route::put('/feedback/{id}', [FeedbackController::class, 'update']);

    // Delete a specific feedback by ID
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy']);

    // Increase rating for a specific feedback by ID
    Route::post('/feedback/increase-rating/{id}', [FeedbackController::class, 'increaseRating']);

});
// get feedback
Route::get('/feedback/{id}', [FeedbackController::class,'getFeedbackById']);

// stripe payment
Route::post('/stripe/payment', [StripePaymentController::class, 'makePayment']);
Route::get('/payment/list', [StripePaymentController::class, 'listPayments'])->middleware('auth:sanctum');

//upload profile image
Route::put('/upload/profile', [ProfileController::class, 'uploadProfile'])->middleware('auth:sanctum');
// Route for updating user profile
Route::put('/updateprofile', [ProfileController::class, 'updateProfile'])->middleware('auth:sanctum');
Route::delete('/payments/{id}', [StripePaymentController::class, 'deletePayment']);
