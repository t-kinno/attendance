@extends('layouts.common')

@section('title', 'ユーザー登録ページ')

@section('content')
<h1>ユーザー登録ページ</h1>
<p>ここはユーザー登録閲覧・登録・編集画面です。</p>

<form action="/user" method="post">
    @csrf
    <div>
        @if ($errors->has('teacher_name'))
        <p>ERROR:{{$errors->first('teacher_name')}}</p>
        @endif
        <label>ユーザー名：
            <input type="text" name="teacher_name"></label>

    </div>
    <div>
        @if ($errors->has('email'))
        <p>ERROR:{{$errors->first('email')}}</p>
        @endif
        <label>メールアドレス：
            <input type="texts" name="email"></label>
    </div>
    <div>
        @if ($errors->has('normal'))
        <p>ERROR:{{$errors->first('normal')}}</p>
        @endif
        <label><input type="radio" name="normal" value="true" checked>常勤</label>
        <label><input type="radio" name="normal" value="false">非常勤</label>
    </div>
    <input type="submit" value="登録">
</form>
<table border="1">

    <tr>
        <th>ユーザー名</th>
        <th>メールアドレス</th>
        <th>常勤/非常勤</th>
    </tr>

    @isset($users)
    aaaa
    @foreach($users as $user)
        <p>{{$user->teacher_name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->normal}}</p>
    @endforeach
    @endisset

    @isset($request)
    {{$request}}
    @endisset
</table>
@endsection