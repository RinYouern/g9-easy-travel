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
            'location' => 'required|string',
            'images' => 'required|array', 
            'images.*' => 'string', 
        ]);

        // Create new place
        $place = new Place();
        $place->name = $validatedData['name'];
        $place->description = $validatedData['description'];
        $place->location = $validatedData['location'];
        $place->images = ($validatedData['images']);
        // Save place
        $place->save();

        // You may want to associate images with the place here

        return response()->json(['message' => 'Place created successfully', 'place' => $place], 201);
    }
    public function getAllPlce(){
        return Place::all();
    }
}
