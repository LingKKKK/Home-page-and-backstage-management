<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('homepage.login');
    }

    public function register()
    {
        return view('homepage.register');
    }

    public function doLogin()
    {
        dd(1);
    }

    public function doRegister()
    {
        dd(1);
    }
}
