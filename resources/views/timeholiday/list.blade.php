@extends('layouts.common')

@section('title', '休講日ページ')

@section('content')
<h1>休講日ページ</h1>
    <p>ここは休講日閲覧・登録・編集画面です。</p>

    <form action="/holiday" method="post">
    @csrf
        <div>
            <label>休講日：</label>
            <input type="date" name="holiday">
        </div>
        <div>
            <label>タイトル：</label>
            <input type="text" name="title">
        </div>
        <input type="submit" value="登録">
    </form>
    <table border="1">
       
        <tr>
            <th>休講日</th>
            <th>タイトル</th>
        </tr>

        @foreach ($items as $item)
        <tr>
            <td>{{$item->day}}</td>
            <td>{{$item->title}}</td>
        </tr>
        @endforeach
    </table>
@endsection   
   
 