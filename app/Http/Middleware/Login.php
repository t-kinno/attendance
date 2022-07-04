<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
    //usersテーブルのis_adminを見て管理者権限があるかどうかを調べる。
    public function handle(Request $request, Closure $next)
    {
        //auth()->check() 認証済かどうか
        //auth()->user()->is_admin == true adminかどうか
        if(auth()->check() && auth()->user()->is_admin == true) {

            return $next($request);
        }

        //エラーメッセージ
        abort(403, 'This action is unauthorized.');
    }
}
