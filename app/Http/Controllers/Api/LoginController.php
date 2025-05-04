<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422); 
        }

        // Debug: Cek apakah UserModel implements JWTSubject
    $userModel = new \App\Models\UserModel;
    if (!$userModel instanceof \Tymon\JWTAuth\Contracts\JWTSubject) {
        return response()->json([
            'success' => false,
            'error' => 'UserModel does not implement JWTSubject',
        ], 500);
    }

        $credentials = $request->only('username', 'password');
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'user' => auth()->guard('api')->user(),
            'token' => $token,
        ], 200);
    }
}
