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
            $request->file('file')->move('upload/', $f_name);
            // DB::table('docs')->where('id', $id)->update(['downloads' => $results->downloads + 1]);
            // $bool=DB::insert("insert into docs(id, name, url, downloads, classify, type, creat_at)
            // values(?,?,?,?)",[5,'小明','出行',670]);
            DB::insert('insert into docs (id, name, url, downloads, classify, type, creat_at) values (?, ?, ?, ?, ?, ?, ?)', [$f_id, $f_name, '/public/upload/'.$f_name, 1, $f_classify, $f_type, $creat_at]);

            dd('上传成功');
        }

    }
}
