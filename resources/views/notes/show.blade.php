<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $note->title }}</h1>

    <p>{{ $note->content }}</p>

    <a href="{{ route('notes.edit', $note) }}">編集</a>

    <form action="{{ route('notes.destroy', $note) }}", method="POST">
        @csrf
        @method('DELETE')

        <button type='submit'>削除</button>
    </form>

    <a href="{{ route('notes.index') }}">メモ一覧に戻る</a>
</body>

</html>
