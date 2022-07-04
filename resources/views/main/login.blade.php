<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ログイン</title>
</head>

<body id="login">
    <h1>ログインページ</h1>
    <p>ここはログイン画面です。</p>

    <form action="/login" method="post">
    @csrf
        <div>
            <label>メールアドレス：</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>パスワード：</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="ログイン">
    </form>
</body>
</html>