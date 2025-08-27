<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @yield('css')
</head>
<body>
    <div class="app-basic">
        <div class="header-basic">
            <a href="/" class="header-logo">
                <img class="header-logo-img" src="{{ asset('images/logo.png') }}" alt="COACHTECH">
            </a>
        </div>
        <div class="main-content">
            <p>コンテンツ</p>
        </div>
    </div>
</body>
</html>