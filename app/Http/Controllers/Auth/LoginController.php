<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function credentials(Request $request)
    {
      return ['email' => $request->email, 'password' => $request->password];
    }
  
    public function login(Request $request)
    {
      $credentials = $this->credentials($request);
      if (!Auth::attempt($credentials))
        return response()->json([
          'message' => 'Unauthorized'
        ], 401);
  
      $user = $request->user();
  
      $newtoken = $user->createToken('My Personal Access Token');
      $tokenString = $newtoken->plainTextToken;
  
      $user->remember_token = $tokenString;
      $user->save();
      return response()->json([
        'user' => $user,
        'access_token' => $user->remember_token,
    ], 200);
    }
    public function logout(Request $request):JsonResponse
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
