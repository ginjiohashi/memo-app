<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Memo App')</title>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">ホーム</a>

        @auth
            <a href="{{ route('notes.index') }}">メモ一覧</a>
            <a href="{{ route('notes.create') }}">新しいメモ</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('register') }}">ユーザー登録</a>
            <a href="{{ route('login') }}">ログイン</a>
        @endguest
    </nav>
    
    @yield('content')    
</body>

</html>