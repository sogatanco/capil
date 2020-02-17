<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        dd('register ok');
    }

    public function postLogin(Request $request)
    {
        dd('login ok');
    }

    
}
