<?php

namespace App\Http\Controllers\Cms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Auth;

error_reporting(E_ALL);
class CmsController extends Controller
{
    public function base()
    {
        // if (! Auth::check()) {
        //     return redirect('/login');
        // }

        // $teamList = $service->getTeamList(Auth::user()->id);
        // return view('cmspage.base', compact('teamList'));
        return view('cmspage.base');
    }

    public function index()
    {
        return view('cmspage.index');
    }

    public function documentManage(Request $request)
    {
        $results = DB::table('docs')->orderBy('id', 'asc')->get();

        return view('cmspage.documentManage', ['results' => $results]);
    }

    public function documentUpload()
    {
        return view('cmspage.documentUpload');
    }

    public function newsManage()
    {
        $results = DB::table('cms_news')->orderBy('id', 'asc')->get();

        return view('cmspage.newsManage', ['results' => $results]);
    }

    public function newsUpload()
    {
        return view('cmspage.newsUpload');
    }

    public function setting()
    {
        return view('cmspage.setting');
    }

    public function uploadNews(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title'   => 'required',
                'label' => 'required',
                'content' => 'required',
            ],
            [
                'title.required'  => '新闻标题不能为空',
                'label.required' => '新闻标签不能为空',
                'content.required' => '新闻内容不能为空',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $cms_id = DB::table('cms_news')->max('id') + 1;
        $cms_title = $request->input('title', '');
        $cms_label = $request->input('label', '');
        $cms_content = $request->input('content', '');
        $creat_at = substr(date('Y-m-d H:i:s', time()), 0, 16);
        // dd($cms_id, $cms_title, $cms_label, $cms_content, $creat_at);

        DB::insert('insert into cms_news (id, title, lebel, content, url, rule, creat_at, times) values (?, ?, ?, ?, ?, ?, ?, ?)', [$cms_id, $cms_title, $cms_label, $cms_content, '/news/'.$cms_id, '管理员', $creat_at, 1]);

        // return redirect('/cms#documentManage')->back();
        return redirect('/cms#newsManage');
    }

    public function uploadNewsPicture(Request $request)
    {
        $file = $request->file('picture');
        $id = DB::table('cms_news_picture')->max('id') + 1;
        $name = time().'.jpg';

        $creat_at = substr(date('Y-m-d H:i:s', time()), 0, 16);

        $file->move(storage_path('pics/post/'), $name);
        DB::insert('insert into cms_news_picture (id, name, url, creat_at) values (?, ?, ?, ?)', [$id, $name, '/pics/post/'.$name, $creat_at]);

        return response()->json([
            'name' => $name,
            'url' => '/pics/post/'.$name,
            'path' => '/pics/post/'.$name
        ]);
    }

    public function delete($id)
    {
        DB::table('cms_news')->where('id', '=', $id)->delete();
    }

    public function showNews($id)
    {
        $results = DB::table('cms_news')->where('id', '=', $id)->get();

        return view('homepage.news', ['results' => $results]);
    }

    public function pictureManage()
    {
        $results = DB::table('cms_picture')->orderBy('id', 'asc')->get();

        return view('cmspage.pictureManage', ['results' => $results]);
        // return view('cmspage.pictureManage');
    }

    public function pictureUpload()
    {
        $results = DB::table('cms_competition')->orderBy('id', 'asc')->get();
        return view('cmspage.pictureUpload', ['results' => $results]);
    }

    public function uploadpicture(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'file'   => 'required',
                'name' => 'required',
            ],
            [
                'file.required'  => '文件不能为空',
                'name.required' => '文件名称不能为空',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $f_id = DB::table('cms_picture')->max('id') + 1;
        // $f_name = $request->input('name', '').'.pdf';
        $f_name = $request->input('name', '');
        $f_classify = $request->input('classify', '');
        $f_type = $request->input('type', '');
        $f_file = $request->input('file', '');
        $file = $request->file();

        // dd($f_id, $f_name, $f_classify, $f_type);

        if ($request->file('file')->isValid()) {
            $creat_at = substr(date('Y-m-d H:i:s', time()), 0, 16);


            $request->file('file')->move(storage_path('pics/'), $f_name.'.'.$f_type);
            DB::insert('insert into cms_picture (id, name, url, classify, creat_at) values (?, ?, ?, ?, ?)', [$f_id, $f_name, '/pics/'.$f_name.'.'.$f_type, $f_classify, $creat_at]);

            // return redirect()->back();
            return redirect('/cms#pictureManage');
        }
    }

    public function pictureDelete($id)
    {
        DB::table('cms_picture')->where('id', '=', $id)->delete();
    }

    public function videoManage()
    {
        $results = DB::table('cms_video')->orderBy('id', 'asc')->get();
        return view('cmspage.videoManage', ['results' => $results]);
    }

    public function videoUpload()
    {
        $results = DB::table('cms_competition')->orderBy('id', 'asc')->get();
        return view('cmspage.videoUpload', ['results' => $results]);
    }

    public function bannerManage()
    {
        $results = DB::table('cms_banner')->orderBy('id', 'asc')->get();

        return view('cmspage.bannerManage', ['results' => $results]);
        // return view('cmspage.bannerManage');
    }

    public function bannerUpload()
    {
        return view('cmspage.bannerUpload');
    }

    public function uploadbanner(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'file'   => 'required',
                'name' => 'required',
            ],
            [
                'file.required'  => '文件不能为空',
                'name.required' => '文件名称不能为空',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $f_id = DB::table('cms_banner')->max('id') + 1;
        // $f_name = $request->input('name', '').'.pdf';
        $f_name = $request->input('name', '');
        $f_classify = $request->input('classify', '');
        $f_type = $request->input('type', '');
        $f_file = $request->input('file', '');
        $file = $request->file();

        // dd($f_id, $f_name, $f_classify, $f_type);

        if ($request->file('file')->isValid()) {
            $creat_at = substr(date('Y-m-d H:i:s', time()), 0, 16);


            $request->file('file')->move(storage_path('pics/'), $f_name.'.'.$f_type);
            DB::insert('insert into cms_banner (id, name, url, classify, creat_at) values (?, ?, ?, ?, ?)', [$f_id, $f_name, '/pics/'.$f_name.'.'.$f_type, $f_classify, $creat_at]);

            // return redirect()->back();
            return redirect('/cms#bannerManage');
        }
    }

    public function uploadvideo(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'url'   => 'required',
                'name' => 'required',
            ],
            [
                'url.required'  => '路径不能为空',
                'name.required' => '文件名称不能为空',
            ]);

        $f_id = DB::table('cms_video')->max('id') + 1;
        // $f_name = $request->input('name', '').'.pdf';
        $f_name = $request->input('name', '');
        $f_classify = $request->input('classify', '');

        DB::insert('insert into cms_video (id, name, url, classify, creat_at) values (?, ?, ?, ?, ?)', [$f_id, $f_name, $f_url, $f_classify, $creat_at]);

        // return redirect()->back();
        return redirect('/cms#videoManage');
    }

    public function eventManage()
    {
        $events = DB::table('cms_event')->orderBy('id', 'asc')->get();
        $competitionList = DB::table('cms_competition')->orderBy('id', 'asc')->get();
        $introList = DB::table('cms_intro')->orderBy('id', 'asc')->get();
        return view('cmspage.eventManage', ['events' => $events, 'competitionList' => $competitionList, 'introList' => $introList]);
        // return view('cmspage.eventManage');
    }

    public function eventRelease()
    {
        return view('cmspage.eventRelease');
    }

    public function competitionRelease()
    {
        $results = DB::table('cms_event')->orderBy('id', 'asc')->get();
        return view('cmspage.competitionRelease', ['results' => $results]);
    }

    public function introRelease()
    {
        $events = DB::table('cms_event')->orderBy('id', 'asc')->get();
        $competitionList = DB::table('cms_competition')->orderBy('id', 'asc')->get();
        return view('cmspage.introRelease', ['events' => $events, 'competitionList' => $competitionList]);
    }

    public function eventPost(Request $request)
    {
        $id = DB::table('cms_event')->max('id') + 1;
        $event_name = $request->input('event_name', '');
        $event_time = $request->input('event_time', '');
        $event_href = $request->input('event_href', '');
        $event_remark = $request->input('event_remark', '');
        $event_config = $request->input('event_config', '');
        $file = $request->file();
        // dd($id, $event_name, $event_time, $event_href, $event_config, $event_remark);
        if ($request->file('file')->isValid()) {
            $request->file('file')->move(storage_path('pics/post'), $event_name.'.jpg');
            DB::insert('insert into cms_event (id, event_name, event_bg, event_time, event_href, event_remark, event_config) values (?, ?, ?, ?, ?, ?, ?)', [$id, $event_name, '/pics/post/'.$event_name.'.jpg', $event_time, $event_href, $event_remark, $event_config]);
            // dd(1);
            return redirect('/cms#competitionRelease');
            // 跳转会赛项编辑页面
        }
    }

    public function competitionPost(Request $request)
    {
        $id = DB::table('cms_competition')->max('id') + 1;
        $event_id = $request->input('event_id', '');
        $competition_name = $request->input('competition_name', '');
        $competition_remark = $request->input('competition_remark', '');
        $competition_config = $request->input('competition_config', '');
        $file = $request->file();
        // dd($id, $event_name, $event_time, $event_href, $event_config, $event_remark);
        if ($request->file('file')->isValid()) {
            $request->file('file')->move(storage_path('pics/post'), $competition_name.'.jpg');
            DB::insert('insert into cms_competition (id, competition_name, competition_bg, competition_remark, competition_config, event_id) values (?, ?, ?, ?, ?, ?)', [$id, $competition_name, '/pics/post/'.$competition_name.'.jpg', $competition_remark, $competition_config, $event_id]);
            // dd(1);
            return redirect('/cms#introRelease');
            // 跳转会赛项编辑页面
        }
    }

    public function introPost(Request $request)
    {
        // dd($request->all());

        $id = DB::table('cms_intro')->max('id') + 1;
        $intro_content = $request->input('intro_content', '');
        $event_id = $request->input('event_id', '');
        $competition_id = $request->input('competition_id', '');
        $intro_video = $request->input('intro_video', '');
        $intro_href = $request->input('intro_href', '');
        $intro_remark = $request->input('intro_remark', '');
        $file_pics = $request->file('file_pics', '');
        $file_docs = $request->file('file_docs', '');

        if ($request->file('file_pics', '')->isValid() && $request->file('file_docs', '')->isValid()) {
            $times = time();
            $request->file('file_pics')->move(storage_path('pics/post'), $times.'.jpg');
            $request->file('file_docs')->move(storage_path('docs/'), $times.'.pdf');
            // dd( [$id, $intro_content, '/pics/post/'.$times.'.jpg', 'docs/'.$times.'.pdf', $intro_video, $intro_href, $intro_remark, $competition_id]);
            DB::insert('insert into cms_intro (id, intro_content, intro_banner, intro_doc, intro_video, intro_href, intro_remark, competition_id) values (?, ?, ?, ?, ?, ?, ?, ?)', [$id, $intro_content, '/pics/post/'.$times.'.jpg', 'docs/'.$times.'.pdf', $intro_video, $intro_href, $intro_remark, $competition_id]);
            // dd('stop');
            return redirect('/cms#eventManage');
            // 跳转会赛项编辑页面
        }
    }

    public function getEvents($event, $competition)
    {
        if ($event != 0 && $competition == 0) {
            $eventList = DB::table('cms_event')->where('id', '=', $event)->get();
            $eventname = $eventList[0]->event_name;
            $competitionList = DB::table('cms_competition')->where('event_id', '=', $event)->get();
            $item = ["message" => "子赛项", "data" => $competitionList, "event" => $eventname];
            return $item;
        }else if ($event != 0 && $competition != 0) {
            $eventList = DB::table('cms_event')->where('id', '=', $event)->get();
            $eventname = $eventList[0]->event_name;
            $competitionList = DB::table('cms_competition')->where('id', '=', $competition)->get();
            $competitionname = $competitionList[0]->competition_name;

            $introList = DB::table('cms_intro')->where('competition_id', '=', $competition)->get();
            $item = ["message" => "详情信息", "data" => $introList, 'eventname' => $eventname,  'competitionname' => $competitionname];
            return $item;
        }
    }
}
