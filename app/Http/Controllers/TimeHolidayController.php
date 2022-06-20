<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeHolidayController extends Controller{
    // DBからデータを取得
    public function index(Request $request){
        $items = DB::select('select * from timeholidays');
        return view('timeholiday.list', ['items'=>$items]);
    }
    
    // DBにデータを挿入
    public function create(Request $request){
        $param = [
            'holiday' => $request->holiday,
            'title' => $request->title,
        ];
        DB::insert('insert into timeholidays (day, title) values (:holiday, :title)', $param);
        return redirect('/holiday');
    }
}
