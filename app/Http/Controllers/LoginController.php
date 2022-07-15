<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//add
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index(Request $request){
        return view('main.login');
    }

    public function login(Request $request) {
        $credentials = $request->only(['email', 'password']); //requestからemail,passwordだけ取ってくる。
        $guard = $request->guard;

        //attempt()でユーザを認証する。
        if(Auth::guard($guard)->attempt($credentials)) {
            $user_info = User::whereEmail($request->email)->first(); //userのメールアドレスの取得
            $manager_flag = $user_info->manager_flag;

            session()->put('level', $manager_flag);
            return redirect('/menu');
        }
        return redirect('/login')->with('flash_message', 'ログインしてください');
    }
}
