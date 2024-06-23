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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'total_cost' => 'required|numeric'
        ]);

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'vehicle_id' => $validatedData['vehicle_id'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'total_cost' => $validatedData['total_cost']
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
}
