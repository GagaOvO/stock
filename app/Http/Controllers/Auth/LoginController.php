<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

      public function login(Request $request)
    {
       // dd($request->all());
       if (Auth::attempt([

               'email' => $request ->email,
               'password' => $request->password,

           ])) {
           
           $user = User::where('email',$request->email)->first();

           if ($user->is_admin()) {
               
               return redirect()->route('admin_dashboard');
           }
           elseif ($user->is_seller()) {
               
               return redirect()->route('seller_dashboard');
           }
           elseif ($user->is_accountant()) {
               
               return redirect()->route('accountant_dashboard');
           }
           elseif ($user->is_stocker()) {
               
               return redirect()->route('stocker_dashboard');
           }
       }
       return redirect()->back();
    }
}
