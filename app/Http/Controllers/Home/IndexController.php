<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Auth;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        $newsList = DB::table('cms_news')->orderBy('id', 'desc')->take(10)->get();
        $docsList = DB::table('docs')->orderBy('id', 'desc')->take(10)->get();
        $videoList = DB::table('cms_video')->orderBy('id', 'desc')->take(10)->get();
        return view('homepage.index', ['results' => $results, 'newsList' => $newsList, 'docsList' => $docsList, 'videoList' => $videoList]);
    }

    public function eventInformation(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        return view('homepage.eventInformation', ['results' => $results]);
    }

    public function match(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        return view('homepage.match', ['results' => $results]);
    }

    public function video(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        return view('homepage.video', ['results' => $results]);
    }

    public function doc(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        $docsList = DB::table('docs')->orderBy('id', 'desc')->get();
        return view('homepage.doc', ['results' => $results, 'docsList' => $docsList]);
    }

    public function aboutus(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        return view('homepage.aboutus', ['results' => $results]);
    }}
