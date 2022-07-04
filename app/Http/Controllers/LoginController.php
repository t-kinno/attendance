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
            //ログインをする度にapi_tokenのアップデート
            $user_info = User::whereEmail($request->email)->first(); //userのメールアドレスの取得
            $user_id = $user_info->id;
            $manager_flag = $user_info->manager_flag;

            //usersテーブルから対象userを見つけてapi_tokenを再生成する。
            $user = User::find($user_id);
            $user->api_token = Str::random(60);
            $user->save();

            if($manager_flag === 1){
                return view('main.success_admin', ['manager_flag' => $manager_flag]);
            } elseif($manager_flag === 0 ) {
                return view('main.success_normal', ['manager_flag' => $manager_flag]);
            } else {
                return back();
            }
        }
        return back();
    }
}
