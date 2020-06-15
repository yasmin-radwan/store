<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $user = Auth::user();
            $token = $user->createToken('api access')->accessToken;
            return response([
                'status' => 'success',
                'token' => $token
            ]);
        }

        return response([
            'status' => 'failed',
            'message' => 'auth fails'
        ]);
    }

    public  function logout(){
        Auth::logout();
        if(Auth::check()){
            Auth::logout();

            return response([
                'status' => 'success',
                'message' =>'user logout successfully'
            ]);
        }
    }
}
