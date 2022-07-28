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

     public function which(Request $request)
     {
          if($request->has("create")){
               $this->create($request);
          } else if($request->has("edit")){
               $this->edit($request);
          }
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
          unset($form_data['_token']);
          $user->password = Hash::make('test');
          $user->flag = 0;
          $user->del_flag = 0;

          $user->fill($form_data)->save();

          return redirect('/user');
     }

     public function edit(Request $request)
     {
          $rules = [
               'teacher_name' => 'required',
               'email' => ['required', 'email'],
               'normal' => 'required',
               'manager_flag' => 'required',
               'flag' => 'required',
          ];

          $user = User::find($request->id);

          $form_data = $this->validate($request, $rules);
          unset($form_data['_token']);
          $user->fill($form_data)->save();

          return redirect('/user');
     }
}
