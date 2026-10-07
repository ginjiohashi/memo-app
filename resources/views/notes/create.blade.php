<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>新しいメモを作成</h1>

        <form action="{{ route('notes.store') }}" method="POST">
            @csrf

            <label for="title">タイトル</label>
            <input type="text" name="title" id="title">

            <label for="content">本文</label>
            <textarea name="content" id="content"></textarea>

            <button type="submit">保存</button>
        </form>
</body>

</html>
