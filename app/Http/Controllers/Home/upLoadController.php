<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Auth;
// use SplFileInfo;
// use SplFileObject;

class upLoadController extends Controller
{
    //upload
    public function upLoad(Request $request)
    {
        $results = DB::table('docs')->orderBy('id', 'asc')->get();
        // dd($results)->toArray();
        return view('homepage.upload', ['results' => $results]);
    }

    public function delete($id)
    {
        DB::table('docs')->where('id', '=', $id)->delete();
        // return api_response(1, '删除成功');
    }

    public function uploadDocs(Request $request)
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

        $f_id = DB::table('docs')->max('id') + 1;
        $f_name = $request->input('name', '').'.pdf';
        $f_classify = $request->input('classify', '');
        $f_type = $request->input('type', '');
        // $f_creat_at = $request->all()['file'];
        $f_file = $request->input('file', '');
        $file = $request->file();

        if ($request->file('file')->isValid()) {
            $creat_at = substr(date('Y-m-d H:i:s', time()), 0, 16);


            $request->file('file')->move(storage_path('docs/'), $f_name);
            // DB::table('docs')->where('id', $id)->update(['downloads' => $results->downloads + 1]);
            // $bool=DB::insert("insert into docs(id, name, url, downloads, classify, type, creat_at)
            // values(?,?,?,?)",[5,'小明','出行',670]);
            dd(1);
            DB::insert('insert into docs (id, name, url, downloads, classify, type, creat_at) values (?, ?, ?, ?, ?, ?, ?)', [$f_id, $f_name, '/public/docs/'.$f_name, 1, $f_classify, $f_type, $creat_at]);

            // return redirect()->back();
            return redirect('/cms#documentManage');
        }
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

        DB::insert('insert into cms_news (id, title, lebel, content, url, rule, creat_at, times) values (?, ?, ?, ?, ?, ?, ?, ?)', [$cms_id, $cms_title, $cms_label, $cms_content, '/public/upload/'.$cms_id, '管理员', $creat_at, 1]);

        // return redirect()->back();
        return redirect('/cms#newsManage');
    }
}
