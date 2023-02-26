<?php

namespace App\Http\Controllers;
use App\Student;
use App\Http\Middleware\IsLoggedIn;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class StudentNewController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('/index');
    }
    return redirect()->back()->withInput()->withErrors(['email' => 'Email or password are incorrect']);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/profile');
    }
};
?>