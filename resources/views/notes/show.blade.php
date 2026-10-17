@extends('layouts.app')

@section('title', 'メモ詳細')

@section('content')
    <h1>{{ $note->title }}</h1>

    <p>{{ $note->content }}</p>

    <a href="{{ route('notes.index') }}">一覧に戻る</a>

    <div class="note-actions">
        <a href="{{ route('notes.edit', $note) }}" class="button button-primary">編集する</a>

        <form action="{{ route('notes.destroy', $note) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')

            <button type="submit" class="button button-danger">削除する</button>
        </form>
    </div>
@endsection
