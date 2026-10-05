<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ログイン</h1>

    <form action="/login" method="POST">
        @csrf

        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="password">パスワード</label>
        <input type="password" name="password" id="password">

        <button type="submit">ログイン</button>
    </form>

</body>

</html>
