<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ユーザー登録</h1>

    <form action="/register" method='POST'>
    @csrf
    <label for="name">名前</label>
    <input type="text" id="name" name="name">
    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email">
    <label for="password">パスワード</label>
    <input type="password" id="password" name="password">
    <button type="submit">登録</button>    
    </form>
</body>
</html>