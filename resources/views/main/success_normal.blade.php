@extends('layouts.normal')

@section('title', '常勤・非常勤ページ')

@section('content')
<div id="login">
    <h1>ログイン成功しました。</h1>
    <p>ここは常勤・非常勤のメニュー画面です。</p>
    <?php dd($manager_flag) ?>
</div>
@endsection