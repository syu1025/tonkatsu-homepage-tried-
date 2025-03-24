<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <ul>
            <a href="{{ route('home') }}">ホーム</a>
            <a href="{{ route('menu.index') }}">メニュー</a>
            <a href="{{ route('information') }}">インフォメーション</a>
            <a href="{{ route('admin') }}">管理者画面</a>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>


</body>

</html>
