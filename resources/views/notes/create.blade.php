@extends('layouts.app')

@section('title', 'メモ作成')

@section('content')
    <h1>新しいメモを作成</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf

        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">

        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="content">本文</label>

        <textarea name="content" id="content" class="js-content-input">{{ old('content') }}</textarea>

        <p>
            <span class="js-character-count">0</span>文字
        </p>

        @error('content')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <button type="submit">保存</button>
    </form>
@endsection
