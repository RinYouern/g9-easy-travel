<?php

namespace App\Http\Controllers;

use App\Models\FeedbackHotel;
use Illuminate\Http\Request;

class FeedbackHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($user_id)
    {
        try {
            $feedbackList = FeedbackHotel::with('traveler', 'hotelOwner')
                ->where('hotel_id', $user_id)
                ->get();
            $formattedFeedback = [];

            foreach ($feedbackList as $feedbackHotel) {
                $travelerRole = optional($feedbackHotel->traveler)->role;
                $hotelOwnerRole = optional($feedbackHotel->hotelOwner)->role;

                $formattedFeedback[] = [
                    'id' => $feedbackHotel->id,
                    'feedback_hotel' => $feedbackHotel->feedback_hotel,
                    'rating' => $feedbackHotel->rating,
                    'traveler_id' => $feedbackHotel->traveler_id,
                    'hotel_id' => $feedbackHotel->hotel_id,
                ];
            }

            return response()->json([
                'hotel_id' => $user_id,
                'feedback' => $formattedFeedback,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch feedback. Please try again later.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'feedback_hotel' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'traveler_id' => 'required|exists:users,id',
            'hotel_id' => 'required|exists:users,id',
        ]);

        $feedbackHotel = FeedbackHotel::create([
            'feedback_hotel' => $validatedData['feedback_hotel'],
            'rating' => $validatedData['rating'],
            'traveler_id' => $validatedData['traveler_id'],
            'hotel_id' => $validatedData['hotel_id'],
        ]);

        return response()->json([
            'message' => 'Feedback created successfully',
            'feedback_hotel' => $feedbackHotel
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'feedback_hotel' => 'sometimes|string',
            'rating' => 'sometimes|integer|min:1|max:5',
            'traveler_id' => 'sometimes|exists:users,id',
            'hotel_id' => 'sometimes|exists:users,id',
        ]);

        try {
            // Find the feedback record by its ID
            $feedbackHotel = FeedbackHotel::findOrFail($id);

            // Update the feedback record with the validated data
            $feedbackHotel->update($validatedData);

            return response()->json([
                'message' => 'Feedback updated successfully',
                'feedback_hotel' => $feedbackHotel
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update feedback. Please try again later.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
