<?php

namespace App\Http\Controllers\AuthOperator;

use App\Http\Controllers\Controller;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:operator')->except('logout');
    }

    public function showLoginForm()
    {
        return view('operator.login');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',
        ]);

        $credential=[
            'username'=>$request->username,
            'password'=>$request->password
        ];

        if(Auth::guard('operator')->attempt($credential, $request->member))
        {
            return redirect()->intended(route('operator.home'));
        }
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
    public function logout()
    {
        Auth::guard('operator')->logout();

        return redirect('/operator');
    }
}
