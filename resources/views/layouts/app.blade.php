<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Memo App')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar">
        <div class="nav-inner">
            <a href="{{ route('home') }}" class="nav-brand">Memo App</a>

            <div class="nav-links">
                @auth
                    <a href="{{ route('notes.index') }}">メモ一覧</a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('register') }}">ユーザー登録</a>
                    <a href="{{ route('login') }}">ログイン</a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>

</html>
