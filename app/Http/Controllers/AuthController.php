<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
         // Validate the credentials
         if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
         // Get the authenticated user
         $user = Auth::user();
        
         // Create a token for the user
         $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json(['token' => $token]);
    }
}
