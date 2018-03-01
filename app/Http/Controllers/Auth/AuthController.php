<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        // User::create([
        //     'name' => '123',
        //     'email' => '123',
        //     'password' => bcrypt('123321'),
        //     ]);
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

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
