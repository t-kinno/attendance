<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeHolidayController extends Controller
{
    // DBからデータを取得
    public function index(Request $request)
    {
        if (session()->get('level') === 1) {
            $items = DB::select('select * from timeholidays');
            return view('timeholiday.list', ['items' => $items]);
        } else {
            // メニューに飛ばす->URLの後ろにクエリ文字(エラーコード)->特定のエラーコードがあった場合にエラー内容を表示
            $level_error = 'level_error';
            return view('main.menu', ['level_error'=>$level_error]);
        }
    }
    
    // DBにデータを挿入
    public function create(Request $request)
    {
        $param = [
            'holiday' => $request->holiday,
            'title' => $request->title,
        ];
        DB::insert('insert into timeholidays (day, title) values (:holiday, :title)', $param);
        return redirect('/holiday');
    }
}
