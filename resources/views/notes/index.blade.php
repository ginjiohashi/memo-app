@extends('layouts.app')

@section('title', 'メモ一覧')

@section('content')
    <h1>メモ一覧</h1>

    <a href="{{ route('notes.create') }}" class="button button-primary create-note-button">新しいメモ</a>

    @forelse ($notes as $note)
        <article class="note-card">
            <a href="{{ route('notes.show', $note) }}" class="note-title">{{ $note->title }}</a>

            <p>{{ $note->content }}</p>
        </article>
    @empty
        <p>まだメモはありません。</p>
    @endforelse

@endsection
