<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}
