<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
       return view('auth.login');
    }

    public function authenticate(Request $request){
        $login = ['email'=>$request->email,'password'=>$request->password];

         if(Auth::attempt($login)){
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('login')->with('error','Login fails, please try again');
    }

    public function logout(){

        if(Auth::check()){
            Auth::logout();
        }

        return redirect()->route('index');
    }
    
}
