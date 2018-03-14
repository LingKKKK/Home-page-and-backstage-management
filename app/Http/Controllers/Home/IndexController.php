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
        $videoList = DB::table('cms_video')->orderBy('id', 'desc')->take(1)->get();
        $eventList = DB::table('cms_event')->orderBy('id', 'desc')->take(2)->get();
        $pictureList = DB::table('cms_picture')->orderBy('id', 'desc')->take(3)->get();
        return view('homepage.index', ['results' => $results, 'newsList' => $newsList, 'docsList' => $docsList, 'videoList' => $videoList, 'eventList' => $eventList, 'pictureList' => $pictureList]);
    }

    public function eventInformation(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        return view('homepage.eventInformation', ['results' => $results]);
    }

    public function match(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        $eventList = DB::table('cms_event')->orderBy('id', 'asc')->get();
        return view('homepage.match', ['results' => $results, 'eventList' => $eventList]);
    }

    public function video(Request $request)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        $pics = DB::table('cms_picture')->orderBy('id', 'asc')->get();
        $videos = DB::table('cms_video')->orderBy('id', 'asc')->get();
        return view('homepage.video', ['results' => $results, 'pics' => $pics, 'videos' => $videos]);
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
    }

    public function toCompetition($id)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        $competitionList = DB::table('cms_competition')->where('event_id', '=', $id)->get();

        return view('homepage.competition', ['results' => $results, 'competitionList' => $competitionList]);
    }

    public function toIntro($id)
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();
        $introList = DB::table('cms_intro')->where('competition_id', '=', $id)->get();
        $competition = DB::table('cms_competition')->where('id', '=', $id)->get();
        $name = $competition->toArray()[0]->competition_name;
        $pic = DB::table('cms_picture')->where('classify', '=', $name)->get();

        return view('homepage.intro', ['introList' => $introList, 'results' => $results, 'name' => $name, 'pic' => $pic]);
    }

}
