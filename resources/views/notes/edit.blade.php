@extends('layouts.app')

@section('title', 'メモ編集')

@section('content')
    <h1>メモを編集</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $note->title) }}"
        >

        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="content">本文</label>
        <textarea name="content" id="content">{{ old('content', $note->content) }}</textarea>

        @error('content')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <button type="submit">保存</button>
    </form>
@endsection