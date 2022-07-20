@extends('layouts.common')

@section('title', 'ユーザー登録ページ')

@section('content')
<h1>ユーザー登録ページ</h1>
    <p>ここはユーザー登録閲覧・登録・編集画面です。</p>

    <form action="/user" method="post">
    @csrf
        <div>
            <label>ユーザー名：
            <input type="text" name="teacher_name"></label>
        </div>
        <div>
            <label>メールアドレス：
            <input type="texts" name="email"></label>
        </div>
        <div>
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
        </tr>
        @endforeach
    </table>
@endsection   
   
 