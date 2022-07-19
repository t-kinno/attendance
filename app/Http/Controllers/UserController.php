<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   // DBからデータを取得
   public function index(Request $request)
   {
       $user_data = User::get('id')
       return view('', ['user_data' => $user_data]);
   }
   
   // DBにデータを挿入
   public function create(Request $request)
   {
    
   }
}
