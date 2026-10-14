@extends('layouts.app')

@section('title', 'メモ詳細')

@section('content')
    <h1>{{ $note->title }}</h1>

    <p>{{ $note->content }}</p>

    <a href="{{ route('notes.index') }}">一覧に戻る</a>

    <a href="{{ route('notes.edit', $note) }}">編集する</a>

    <form action="{{ route('notes.destroy', $note) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">削除する</button>
    </form>
@endsection