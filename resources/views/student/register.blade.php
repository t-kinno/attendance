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
    <h1>生徒情報登録</h1>
    <p>ここは生徒情報登録画面です。</p>

    <form action="/student" method="post">
    @csrf
        <div>
            <label>学籍番号:</label>
            <input type="number" name="student_number">
        </div>
        <div>
            <label>生徒名：</label>
            <input type="text" name="student_name">
        </div>
        <div>
            <label>ふりがな：</label>
            <input type="text" name="student_ruby">
        </div>
        <div>
            <label>性別：</label>
            <input type="text" name="student_gender">
        </div>
        <div>
            <label>学科：</label>
            <input type="text" name="department_id">
        </div>
        <div>
            <label>コース：</label>
            <input type="text" name="course_id">
        </div>
        <div>
            <label>奨学金判定：</label>
            <input type="text" name="student_scholarship">
        </div>
        <div>
            <label>大学編入希望：</label>
            <input type="text" name="student_universal">
        </div>
        <div>
            <label>備考：</label>
            <input type="text" name="overview">
        </div>
        <input type="submit" value="登録">
    </form>
</body>
</html>