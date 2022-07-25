<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
     // DBからデータを取得
     public function index(Request $request)
     {
          $items = User::get();
          return view('user.list', ['items' => $items]);
     }

     // DBにデータを挿入
     public function create(Request $request)
     {
          $rules = [
               'teacher_name' => 'required',
               'email' => ['required', 'email'],
               'normal' => 'required',
          ];
          $user = new User;
          $form_data = $this->validate($request, $rules);
          //    $form_data = $request->all();
          unset($form_data['_token']);

          $user->password = Hash::make('test');

          $user->flag = 0;
          $user->del_flag = 0;

          $user->fill($form_data)->save();

          // return view('user.list', ['users' => $user, 'request' => $request, 'pw'=>$random]);

          return redirect('/user');
     }
}
