<?php

// app/Http/Controllers/VehicleController.php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function addVehicle(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'make' => 'required|string',
            'image' => '',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string',
            'size' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'traveler_capacity' => 'required|integer|min:1',
        ]);

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
}
