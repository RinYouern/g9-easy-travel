<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function uploadProfile(Request $request){
        $user = $request->user();
        $user->profile = $request->profile;
        $user->save();

       return response()->json([
        "message"=>"Profile uploaded successfully",
        "data" => $user
       ]);

    }

    public function updateProfile (Request $request) {

        $user = $request->user();

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'location' => 'required|string|max:255',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->location = $request->input('location');
        $user->save();

        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => $user
        ]);
    }
 
}
