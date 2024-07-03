<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'rate' => 'required|numeric|min:0|max:5',
        'location' => 'required|string|max:255',
        'images' => 'required|array',     // Ensure 'images' is required and should be an array
        'images.*' => 'required|url',     // Ensure each item in 'images' array is required and should be a valid URL
    ]);

    // Prepare data to create a new Place
    $data = $request->only(['name', 'description', 'rate', 'location']);
    $data['images'] = $request->input('images');  // Assign the 'images' array directly

    // Create a new Place record in the database
    $place = Place::create($data);

    // Return a JSON response indicating success
    return response()->json([
        'message' => 'Place created successfully!',
        'data' => $place
    ], 201);
}



    public function index()
    {
        $places = Place::all();

        return response()->json([
            'message' => 'Places retrieved successfully!',
            'data' => $places
        ]);
    }
}
