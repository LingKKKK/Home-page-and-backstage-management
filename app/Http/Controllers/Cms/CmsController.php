<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Auth;

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

        DB::insert('insert into cms_news (id, title, lebel, content, url, rule, creat_at, times) values (?, ?, ?, ?, ?, ?, ?, ?)', [$cms_id, $cms_title, $cms_label, $cms_content, '/news/'.$cms_id, '管理员', $creat_at, 1]);

        // return redirect('/cms#documentManage')->back();
        return redirect('/cms#newsManage');
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
        return view('cmspage.pictureUpload');
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
        // $results = DB::table('cms_video')->orderBy('id', 'asc')->get();
        return view('cmspage.videoManage');
    }

    public function videoUpload()
    {
        return view('cmspage.videoUpload');
    }
}
