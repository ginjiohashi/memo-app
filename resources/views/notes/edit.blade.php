<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}"">

        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <label for="content">本文</label>
        <textarea name="content" id="content">{{ old('content', $note->content) }}</textarea>

        @error('content')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">保存</button>
    </form>
</body>

</html>
