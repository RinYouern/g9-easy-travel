<?php

// app/Http/Controllers/VehicleController.php
namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function addVehicle(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'color' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'traveler_capacity' => 'required|integer',
            'owner_id' => 'required|integer|exists:users,id',
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

}