<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo App</title>
</head>

<body>
    <h1>Memo App</h1>
    <p>シンプルなメモアプリです。</p>

    @auth
        <p>ログイン中：{{ auth()->user()->name }}</p>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    @endauth

    @guest
        <p>ログインしていません</p>
    @endguest
</body>

</html>
