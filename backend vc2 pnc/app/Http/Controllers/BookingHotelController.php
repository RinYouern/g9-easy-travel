<?php

namespace App\Http\Controllers;

use App\Models\BookingHotel;
use Illuminate\Http\Request;

class BookingHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = BookingHotel::all();
        return response()->json($bookings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string', // Changed to 'string' instead of 'email'
            'fromDate' => 'required|string',
            'toDate' => 'required|string',
            'paid' => 'nullable|boolean',
            'price' => 'nullable|integer',
            'user_id' => 'required|integer|exists:users,id',
            'room_id' => 'required|integer|exists:rooms,id',
        ]);

        $booking = new BookingHotel;
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->email = $request->email; // Manually set the email field
        $booking->fromDate = $request->fromDate;
        $booking->toDate = $request->toDate;
        $booking->paid = $request->paid;
        $booking->price = $request->price;
        $booking->user_id = $request->user_id;
        $booking->room_id = $request->room_id;
        $booking->save();

        return response()->json($booking, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $booking = BookingHotel::findOrFail($id);
        return response()->json($booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email', // Validating email format
            'fromDate' => 'required|date',
            'toDate' => 'required|date',
            'paid' => 'nullable|boolean',
            'user_id' => 'required|integer|exists:users,id',
            'room_id' => 'required|integer|exists:rooms,id',
        ]);

        $booking = BookingHotel::findOrFail($id);
        $booking->update($request->all());

        return response()->json($booking);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $booking = BookingHotel::findOrFail($id);
        $booking->delete();

        return response()->json(null, 204);
    }
}
