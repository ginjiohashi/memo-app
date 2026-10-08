<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('notes.update', $note) }}", method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input type="text", name="title", id="title", value={{ $note->title }}>
        <label for="content">本文</label>
        <textarea name="content" id="content">{{ $note->content }}</textarea>
        <button type="submit">保存</button>
    </form>
</body>

</html>
