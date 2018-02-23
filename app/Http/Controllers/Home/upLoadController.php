<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Auth;

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
}
