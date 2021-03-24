<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminRole;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function register(Request $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 1
        ]);

        $token = auth()->guard('admins')->login($admin);

        return $this->respondWithToken($token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->guard('admins')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->guard('admins')->logout();

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
            'expires_in'   => auth()->guard('admins')->factory()->getTTL() * 60
        ]);
    }

    protected function adminCheck(){

        if(auth()->guard('admins')->check()) {
            $admin_role_id= auth()->guard('admins')->user()->role_id;
            return response()->json([
                'success' => true,
                'role_id' => $admin_role_id,
                'role' => AdminRole::select('name')->where('id',$admin_role_id)->get(),
            ]);

        }else
            return response()->json([
                'success' => false,
                'message' => 'not admin']);
        }



    }




