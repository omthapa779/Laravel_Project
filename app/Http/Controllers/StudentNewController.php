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
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class StudentNewController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }



  
};
?>