@extends('layouts.common')

@section('title', 'ユーザー登録ページ')

@section('content')
<h1>ユーザー登録ページ</h1>
<p>ここはユーザー登録閲覧・登録・編集画面です。</p>

<form action="/user" method="post">
    @csrf
    <div>
        @if ($errors->has('teacher_name'))
        <p>エラー:ユーザ名を入力してください</p>
        @endif
        <label>ユーザー名：<input type="text" name="teacher_name"></label>
    </div>
    <div>
        @if ($errors->has('email'))
        <p>エラー:メールアドレスを入力してください</p>
        @endif
        <label>メールアドレス：<input type="text" name="email"></label>
    </div>
    <div>
        @if ($errors->has('normal'))
        <p>エラー:常勤または非常勤を選択してください</p>
        @endif
        <label><input type="radio" name="normal" value="0" checked>常勤</label>
        <label><input type="radio" name="normal" value="1">非常勤</label>
    </div>
    <input type="submit" value="登録">
</form>
<table border="1">

    <tr>
        <th>ユーザー名</th>
        <th>メールアドレス</th>
        <th>常勤/非常勤</th>
        <th>管理者フラグ</th>
    </tr>

    @isset($items)
        @foreach ($items as $item)
            <tr>
                <td>{{$item->teacher_name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    @if($item->normal === 0)
                        常勤
                    @else
                        非常勤
                    @endif
                </td>
                <td>{{$item->manager_flag}}</td>
                <td><button>編集</button></td>
            </tr>
        @endforeach
    @endisset
    
</table>


<form action="" id="edit_user" method="post">
    <label>ユーザー名：<input type="text" name="teacher_name"></label>
    <label>メールアドレス：<input type="text" name="email"></label>

    <label><input type="radio" name="normal" value="0">常勤</label>
    <label><input type="radio" name="normal" value="1">非常勤</label>

    <label><input type="checkbox" name="manager_level">管理者</label>

    <input type="submit" value="登録">
</form>

@endsection