<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//add
use Illuminate\Support\Facades\Auth;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

use App\Models\Student;

use App\Imports\TestStudentImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index(Request $request){
        $items = Student::get();
        return view('student.list', ['items' => $items]);
    }
    public function student(Request $request){
        return view('student.list');
    }

    // csvファイルによる生徒情報登録
    public function add(Request $request){
        return view('student.add');
    }

    public function import(Request $request){
        $excel_file = $request->file('excel_file');
        $excel_file->store('excels');
        Excel::import(new TestStudentImport, $excel_file);
        return view('student.add');
    }
}
