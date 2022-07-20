<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
          //    $user = new User;
          //    $form_data = $request->all();
          //    // unset($form_data['_token']);
          //    $user->fill($form_data)->save();

          //    return redirect('/user');

          $rules = [
               'teacher_name' => 'required',
               'email' => ['required', 'email'],
               'normla' => 'required',
          ];

          $user = $this->validate($request, $rules);


          return view('user.list', ['users' => $user, 'request'=>$request]);
     }
}
