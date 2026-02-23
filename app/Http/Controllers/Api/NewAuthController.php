<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class NewAuthController extends Controller
{
    

    public function newlogin(Request $request){
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) 
        {
            $token = Auth::user()->createToken('auth_token')->plainTextToken;
            return response()->json([
                'user' => Auth::user(), 
                'token' => $token
            ], 200);
        }
  
        return response()->json([
            'error_message' => 'Unauthorised, Wrong Email or Password'
        ], 401);
    }

    public function userData (Request $request){
         
        if (Auth::user()) {
            return response()->json([ 
                'user_details' => auth()->user(),
            ]);
        }
    }

    
}
