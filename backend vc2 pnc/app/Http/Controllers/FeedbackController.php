<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Feedback received by the user
        $feedbackReceived = Feedback::with('owner')
            ->where('related_user_id', $user->id)
            ->latest()
            ->get();

        // Feedback given by the user
        $feedbackGiven = Feedback::with('relatedUser')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        return response()->json([
            'feedback_received' => $feedbackReceived,
            'feedback_given' => $feedbackGiven,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'related_user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|max:500',
        ]);

        $feedback = Feedback::create([
            'user_id' => Auth::id(),
            'related_user_id' => $validated['related_user_id'],
            'rating' => $validated['rating'],
            'content' => $validated['content'],
        ]);

        // Update related user's rating
        $this->updateUserRating($validated['related_user_id']);

        return response()->json($feedback, 201);
    }

    public function show($id)
    {
        $feedback = Feedback::with(['owner', 'relatedUser'])->find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        return response()->json($feedback, 200);
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|max:500',
        ]);

        // Store old related_user_id before updating
        $oldRelatedUserId = $feedback->related_user_id;

        $feedback->rating = $validated['rating'];
        $feedback->content = $validated['content'];
        $feedback->save();

        // Update old related user's rating
        $this->updateUserRating($oldRelatedUserId);
        // Update new related user's rating
        $this->updateUserRating($feedback->related_user_id);

        return response()->json($feedback, 200);
    }

    public function increaseRating($id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        $feedback->rating = min($feedback->rating + 1, 5);
        $feedback->save();

        // Update related user's rating
        $this->updateUserRating($feedback->related_user_id);

        return response()->json($feedback, 200);
    }

    public function destroy($id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        $related_user_id = $feedback->related_user_id;
        $feedback->delete();

        // Update related user's rating
        $this->updateUserRating($related_user_id);

        return response()->json(['message' => 'Feedback deleted successfully'], 200);
    }

    private function updateUserRating($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $totalRating = Feedback::where('related_user_id', $userId)->sum('rating');
            $ratingCount = Feedback::where('related_user_id', $userId)->count();
            $user->rating = $ratingCount > 0 ? $totalRating / $ratingCount : 0;
            // Ensure no rounding up
            $user->rating = number_format($user->rating, 2, '.', ''); // Limit to 2 decimal places without rounding
            $user->save();
        }
    }
}
