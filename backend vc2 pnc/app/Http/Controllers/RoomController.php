<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|string',
            'people' => 'required|integer',
            'price' => 'required|integer',
            'status' => 'required|boolean',
            'owner_id' => 'required|integer',
        ]);

        $room = Room::create([
            'room_id' => $request->room_id,
            'people' => $request->people,
            'price' => $request->price,
            'status' => $request->status,
            'owner_id' => $request->owner_id,
        ]);

        return response()->json($room, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return response()->json($room);
    }

    public function index($userId)
    {
        $rooms = Room::where('owner_id', $userId)->get();
        return response()->json($rooms);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'room_id' => 'required|string',
            'people' => 'required|integer',
            'price' => 'required|integer',
            'status' => 'required|boolean',
            'owner_id' => 'required|integer',
        ]);

        $room = Room::findOrFail($id);
        $room->update([
            'room_id' => $request->room_id,
            'people' => $request->people,
            'price' => $request->price,
            'status' => $request->status,
            'owner_id' => $request->owner_id,
        ]);

        return response()->json($room);
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return response()->json(null, 204);
    }
}
