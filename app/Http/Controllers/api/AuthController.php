<?php

namespace App\Http\Controllers\api;
use App\Models\User;;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Validation\ValidationException;
use Exception;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $fields = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|string|unique:users,email',
                'age' => 'required|string',
                'gender' => 'string',
                'password' => 'required|string|min:8',
            ]);

            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'age' => $fields['age'],
                'gender' => $fields['gender'],
                'password' => bcrypt($fields['password']),
            ]);

            $token = $user->createToken('myapptoken')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token,
            ];

            return response()->json($response, 201);
        } catch (ValidationException $e) {
            // Handle validation errors here
            return response()->json(['error' => $e->errors()], 422);
        } catch (Exception $e) {
            // Handle other errors here
            return response()->json(['error' => 'Server error'], 500);
        }

    }

   public function login(Request $request)
    {
        // Validate the login request
        $email=$request['email'];
        $password=$request['password'];
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }
        if (password_verify($password, $user->password)) {
            $token = $user->createToken('API Token')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];
            return response()->json($response, 200);
        }
        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Logged out'
        ];
    }
    
}
