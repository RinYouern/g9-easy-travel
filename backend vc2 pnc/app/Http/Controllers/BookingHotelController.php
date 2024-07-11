<?php

namespace App\Http\Controllers;

use App\Models\BookingHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;

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
        $booking->email = $request->email; 
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($id)
    {
        // Fetch the booking with user and room relationships
        $booking = BookingHotel::with('user', 'room')->findOrFail($id);

        // Fetch the hotel associated with the room
        $hotel = User::findOrFail($booking->room->owner_id); // Assuming owner_id on room points to User model

        $checkInDate = $booking->fromDate;
        $checkOutDate = $booking->toDate;
        $quantityOfNights = Carbon::parse($checkOutDate)->diffInDays($checkInDate);

        $roomID = $booking->room->room_id;


        $locationHotel = $hotel->location;
        $profile = $hotel->profile;

        $bookerName = $booking->name;
        $bookerPhone = $booking->phone;
        $bookerEmail = $booking->email;
        $price = $booking->price;

        $data = [
            'BookerName' => $bookerName,
            'BookerPhone' => $bookerPhone,
            'BookerEmail' => $bookerEmail,
            'Check-inDate' => $checkInDate,
            'Check-outDate' => $checkOutDate,
            'RoomID' => $roomID,
            'Location Hotel' => $locationHotel,
            'ProfileHotel' => $profile,
            'QuantityofNights' => $quantityOfNights,
            'Price' => $price
        ];

        return response()->json($data);
    }


    /**
     * Get all bookings associated with a specific user.
     *
     * @param int $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function bookingsByUser($user_id)
    {
        $bookings = BookingHotel::where('user_id', $user_id)->get();

        return response()->json($bookings);
    }
}