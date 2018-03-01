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
}
