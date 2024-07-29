<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{
    function index()
    {
        return view('Auth.login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email'       =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('/')->with('info', 'Maaf, Email atau Password Salah!');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('/')->with('error', 'Login Gagal!');
    }

    function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return Redirect('/');
    }
}
