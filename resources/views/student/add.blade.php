<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>生徒情報登録</title>
</head>
<body id="student">
    <h1>生徒情報登録ページ</h1>
    <p>ここは生徒情報登録画面です</p>

    <h4>CSVファイルを選択してください</h4>
    <div class="row">
        <div class="col-md-6">
          ■手順

          1. CSVで保存します。

          2. ファイルを選択し読み込んでください。
        </div>
    </div>
    
    <form method="post" action="/students_import" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file" ><br>
        <input type="submit" value="インポート">
    </form>
</body>

</html>