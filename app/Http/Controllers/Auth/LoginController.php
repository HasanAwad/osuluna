<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Admin;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest:dashboard')->except('logout');
    }
    public function login(Request $request)
{

    $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|string|min:6'
      ]);
            //dd($request->all());
       // dd(Auth::guard('dashboard')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember));
         if (Auth::guard('dashboard')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
           // dd(auth()->guard('dashboard')->user());
        return redirect()->route('articles.index');

      }


        //return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout()
    {
        Auth::guard('dashboard')->logout();
        return redirect()
            ->route('login')
            ->with('status','Admin has been logged out!');
    }

}
