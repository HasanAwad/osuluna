<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 1
        ]);

        $token = auth()->guard('api')->login($user);

        return $this->respondWithToken($token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->guard('api')->logout();

        return response()->json([
            'success' => true,
            'message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'success' => true,
            'token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->guard('api')->factory()->getTTL() * 60
        ]);
    }
}
