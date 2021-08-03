<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()=== true){
            return view('layouts.admin.dashboard');

        }
        return redirect()->route('admin.login');

    }

    public function showLoginForm()
    {
        return view('layouts.admin.formLogin');
    }

    public function login(request $request)
    {
        var_dump($request->all());

        $credentials = [
          'email' =>$request->email,
            'password' =>$request->password
        ];

        Auth::attempt($credentials);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');

    }
}
