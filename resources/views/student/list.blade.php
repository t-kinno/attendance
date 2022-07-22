<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>生徒情報</title>
</head>
<body id="student">
    <h1>生徒情報ページ</h1>
    <p>ここは生徒情報閲覧画面です。</p>

    <table>
      <tr><th>学籍番号</th><th>名前</th><th>ふりがな</th><th>性別</th></tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->student_number}}</td>
      <td>{{$item->student_name}}</td>
      <td>{{$item->student_ruby}}</td>
      <td>
        @if ($item->student_gender == 0)
          男
        @else
          女
        @endif
      </td>
    </tr>
    @endforeach
    </table>
    
</body>

</html>