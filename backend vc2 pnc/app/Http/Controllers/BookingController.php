<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

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
            // 'driver_response'=>'required|string',
        ]);

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'vehicle_id' => $validatedData['vehicle_id'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'total_cost' => $validatedData['total_cost'],
            'where' => $validatedData['where'],
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'quantity' => $validatedData['quantity'],
            // 'driver_response'=>$validatedData['driver_response'],
        ]);

        return response()->json($booking, 201);
    }

    public function recordOne()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return response()->json($bookings, 200);
    }

    public function recordAll()
    {
        $bookings = Booking::all();
        return response()->json($bookings, 200);
    }

    public function acceptBooking(Request $request, Booking $booking)
    {

        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        $validatedData = $request->validate([
            'status' => 'required|in:accepted,declined',
        ]);

        if ($booking->status === 'pending' && $booking->driver_id === null) {
            if ($validatedData['status'] === 'accepted') {
                $user = Auth::user();
                $booking->driver_id = $user->id;
                $booking->status = 'accepted';
            } else {
                $booking->driver_id = null;
                $booking->status = 'pending';
            }
            $booking->save();

            return response()->json($booking, 200);
        } else {
            return response()->json(['error' => 'Booking could not be updated'], 400);
        }
    }

}
