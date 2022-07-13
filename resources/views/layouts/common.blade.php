@auth

@if(session('level') === 1)
    @include('layouts.master')
@else 
    @include('layouts.normal')
@endif

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <title>@yield('title')</title>
</head>

<body id="main">

    <header>
        <div>
            ここは全ページ共通ヘッダーです
        </div>
    </header>

    <div class="flex">

        <div id="side_menu">
            @yield('side_menu')
        </div>

        <div id="content">
            @yield('content')
        </div>

    </div>

</body>
</html>

@endauth