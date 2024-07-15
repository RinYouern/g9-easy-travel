<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Http\Resources\BookingResource;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    /**
     * Store a newly created booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function bookingCar(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'start_date' => 'required',
            'end_date' => 'required|after:start_date',
            'total_cost' => 'required|numeric',
            'where' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'quantity' => 'required|numeric',
        ]);

        $booking = Booking::create([
            'user_id' =>  $user->id,
            'vehicle_id' => $validatedData['vehicle_id'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'total_cost' => $validatedData['total_cost'],
            'where' => $validatedData['where'],
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'quantity' => $validatedData['quantity'],
        ]);

        return response()->json($booking, 201);
    }

    public function recordOne()
{
    $user = auth()->user();
    if (!$user) {
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    $bookings = Booking::with('user', 'vehicle')
        ->where('user_id', $user->id)
        ->get();

    $bookingsData = [];

    foreach ($bookings as $booking) {
        if (!$booking->vehicle) {
            return response()->json(['error' => 'Vehicle not found for booking ID ' . $booking->id], 404);
        }

        $vehicleOwner = User::find($booking->vehicle->owner_id);
        if (!$vehicleOwner) {
            return response()->json(['error' => 'Vehicle owner not found for vehicle ID ' . $booking->vehicle->id], 404);
        }

        $checkInDate = Carbon::parse($booking->start_date)->format('Y-m-d');
        $checkOutDate = Carbon::parse($booking->end_date)->format('Y-m-d');

        $data = [
            'BookerName' => $booking->name,
            'BookerPhone' => $booking->phone,
            'go' => $checkInDate,
            'back' => $checkOutDate,
            'Where' => $booking->where,
            'VehicleID' => $booking->vehicle->id,
            'Location' => $vehicleOwner->location ?? 'N/A',
            'Profile' => $vehicleOwner->profile ?? 'N/A',
            'CompanyName' => $vehicleOwner->name ?? 'N/A',
            'Email' => $vehicleOwner->email ?? 'N/A',
            'Price' => $booking->total_cost
        ];

        $bookingsData[] = $data;
    }

    return response()->json($bookingsData);
}



    public function recordAll()
    {
        $bookings = Booking::all();
        return BookingResource::collection($bookings)->response();
    }

    public function acceptBooking(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:accepted,declined',
            'driver_id' => 'required|exists:users,id',
        ]);

        if ($booking->status === 'pending' && $booking->driver_id === null) {
            if ($validatedData['status'] === 'accepted') {
                $booking->driver_id = $validatedData['driver_id'];
                $booking->status = 'accepted';
            } else {
                $booking->driver_id = null;
                $booking->status = 'declined';
            }

            $booking->save();

            return response()->json($booking, 200);
        } else {
            return response()->json(['error' => 'Booking could not be updated'], 400);
        }
    }
}
