@extends('layouts.app')

@section('title', 'メモ一覧')

@section('content')
    <h1>メモ一覧</h1>

    @forelse ($notes as $note)
        <a href="{{ route('notes.show', $note) }}">{{ $note->title }}</a>
        <p>{{ $note->content }}</p>
    @empty
        <p>まだメモはありません。</p>
    @endforelse

@endsection
