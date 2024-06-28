<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return response()->json(["success"=>true, "rooms"=>$rooms], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required',
            'people' => 'required|integer|min:1',
            'price' => 'required',
            'status' => 'sometime|boolean',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }
        $room = Room::create([
            'room_id' => $request->room_id,
            'people' => $request->people,
            'price' => $request->price,
            'status' => $request->input('status', true),
        ]);

        return response()->json(["success"=>true, "massage"=> "Room created successfully!", "room"=>$room], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::find($id);
        if (!$room) {
            return response()->json(['success' => false, 'message' => 'Room not found'], 404);
        }
        return response()->json([
            'success' => true,
            'room' => [
                'room_id' => $room->room_id,
                'people' => $room->people,
                'price' => $room->price,
                'status' => $room->status,
                'created_at' => $room->created_at,
                'updated_at' => $room->updated_at,
            ]
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required',
            'people' => 'required|integer|min:1',
            'price' => 'required',
            'status' => 'sometimes|boolean',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }
    
        $room = Room::find($id);
    
        if (!$room) {
            return response()->json(['success' => false, 'message' => 'Room not found'], 404);
        }
    
        $room->room_id = $request->room_id;
        $room->people = $request->people;
        $room->price = $request->price;
        $room->status = $request->input('status', $room->status);
    
        $room->save();
    
        return response()->json(['success' => true, 'massage'=>'Room updated successfully!', 'room' => $room], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::find($id);
        $room -> delete();
        return response()->json(["success"=>true, "message"=>"Room deleted successfully"], 200);
    }
}
