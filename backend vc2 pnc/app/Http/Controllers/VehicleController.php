<?php

// app/Http/Controllers/VehicleController.php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    public function addVehicle(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'make' => 'required|string',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string',
            'size' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'traveler_capacity' => 'required|integer|min:1',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }

        $validatedData['owner_id'] = $user->id;
        $vehicle = Vehicle::create($validatedData);

        return response()->json($vehicle, 201);
    }

    public function getVehiclesByCompany(Request $request)
    {
        $user = Auth::user();
        $vehicles = Vehicle::where('owner_id', $user->id)->get();
        return response()->json($vehicles);
    }

    public function getVehicleBooking(Request $request)
    {
        $vehicle = Vehicle::all();
        return response()->json($vehicle);
    }

    public function getVehicles(Request $request, $userId)
    {
        $vehicles = Vehicle::where('owner_id', $userId)->get();
        return response()->json($vehicles);
    }

    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            return response()->json(['message' => 'Vehicle retrieved successfully', 'data' => $vehicle], 200);
        } else {
            return response()->json(['message' => 'Vehicle not found'], 400);
        }
    }

    public function getAllVehicles()
    {
        $vehicles = Vehicle::all();
        return response()->json(['message' => 'All vehicles retrieved successfully', 'data' => $vehicles], 200);
    }

    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $validatedData = $request->validate([
                'make' => 'sometimes|required|string',
                'image' => 'sometimes|nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
                'year' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
                'color' => 'sometimes|required|string',
                'size' => 'sometimes|required|string',
                'price' => 'sometimes|required|numeric|min:0',
                'description' => 'sometimes|required|string',
                'traveler_capacity' => 'sometimes|required|integer|min:1',
            ]);

            if ($request->hasFile('image')) {
                // Delete the old image if exists
                if ($vehicle->image) {
                    Storage::disk('public')->delete($vehicle->image);
                }
                $path = $request->file('image')->store('images', 'public');
                $validatedData['image'] = $path;
            }

            $vehicle->update($validatedData);

            return response()->json(['message' => 'Vehicle updated successfully', 'data' => $vehicle], 200);
        } else {
            return response()->json(['message' => 'Vehicle not found'], 404);
        }
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $vehicle->delete();
            return response()->json(['message' => 'Vehicle deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Vehicle not found'], 404);
        }
    }
}
