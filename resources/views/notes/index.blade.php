<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>メモ一覧</h1>

    <a href="{{ route('notes.create') }}">新しいメモを作成</a>

    @forelse ($notes as $note)
        <h2>{{ $note->title }}</h2>
        <p>{{ $note->content }}</p>
    @empty
        <p>まだメモはありません。</p>
    @endforelse
</body>

</html>
