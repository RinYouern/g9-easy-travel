<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Str;

class AuthController extends Controller
{
    //Login
    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|string|max:255',
            'password'  => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'User not found'
            ], 401);
        }

        $user   = User::where('email', $request->email)->firstOrFail();
        $token  = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'       => 'Login success',
            'access_token'  => $token,
            'token_type'    => 'Bearer'
        ]);
    }
    //register
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'user_role' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_role' => $request->user_role,
            'profile' => "https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg"
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Registration successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
    //forgot password
    public function forgot_password(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if (!empty($user)) {
            $user->remember_token = Str::random(40);
            $user->save();
        } else {
            return redirect()->back()->with('error', 'Email not found');
        }
    }
    public function index(Request $request)
    {
        $user = $request->user();
        return response()->json([
            'message' => "login seccessful ",
            'data' => $user,
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => 'Logout successful'
        ]);
    }

    public function getUsersByRole(Request $request, $role): JsonResponse
    {
        $users = User::where('user_role', $role)->get();
        return response()->json([
            'message' => 'Users retrieved successfully',
            'data' => $users,
        ]);
    }

    public function getDriver(Request $request, $role): JsonResponse
    {
        $user = Auth::user();

        // Ensure the user is authenticated
        if (!$user) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        // Get the company ID of the authenticated user
        $companyId = $user->id;

        // Fetch users by role and company ID
        $users = User::where('user_role', $role)
            ->where('company', $companyId)
            ->get();

        return response()->json([
            'message' => 'Users retrieved successfully',
            'data' => $users,
        ]);
    }



    public function getAll(): JsonResponse
    {
        $user = User::all();
        return response()->json([
            'message' => 'Users retrieved successfully',
            'data' => $user,
        ]);
    }

    public function edit(Request $request, $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|required|string|min:6',
            'user_role' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->user_role = $request->user_role;

        $user->save();

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user,
        ]);
    }

    public function delete($id): JsonResponse
    {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully',
        ]);
    }

    public function detail($id): JsonResponse
    {
        $user = User::findOrFail($id);
        return response()->json([
            'data' => $user,
        ]);
    }

    public function addDriver(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $company = Auth::user();

        $driver = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_role' => 'driver',
            'company' => $company->id,
            'profile' => "https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg", // Default profile image URL
        ]);

        $token = $driver->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Driver registration successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
    public function showDetail(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
}
