@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')
    <h1>ユーザー登録</h1>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <label for="name">名前</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">

        @error('name')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">

        @error('email')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="password">パスワード</label>
        <input type="password" id="password" name="password">

        @error('password')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <button type="submit">登録</button>
    </form>
@endsection