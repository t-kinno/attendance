<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//add
use Illuminate\Support\Facades\Auth;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request){
        return view('student.register');
    }
    public function student(Request $request){
        return view('student.list');
    }
}
