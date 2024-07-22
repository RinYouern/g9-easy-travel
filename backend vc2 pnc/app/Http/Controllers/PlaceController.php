<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Plus;

class PlaceController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string|max:15000',
            'province' => 'required|string',

            'images' => 'required|array',
            'images.*' => 'string',
        ]);

        // Create new place
        $place = new Place();
        $place->name = $validatedData['name'];
        $place->description = $validatedData['description'];
        $place->province = $validatedData['province'];
        $place->location = $validatedData['location'];
        $place->rating = '3.8';
        $place->images = ($validatedData['images']);
        // Save place
        $place->save();


        return response()->json(['message' => 'Place created successfully', 'place' => $place], 201);
    }
    public function getAllPlce()
    {
        return Place::all();
    }
    public function getTopPlaces()
    {
        // Retrieve the top 10 places sorted by rating in descending order
        $topPlaces = Place::orderBy('rating', 'desc')
            ->take(10)
            ->get();

        return response()->json([
            'message' => 'Top 10 places retrieved successfully',
            'data' => $topPlaces,
        ]);
    }

    public function getPlaceById($id)
    {
        // Find the place by ID
        $place = Place::find($id);

        if (!$place) {
            return response()->json(['message' => 'Place not found'], 404);
        }

        return response()->json(['place' => $place], 200);
    }
}
