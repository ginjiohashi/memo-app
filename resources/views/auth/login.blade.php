@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
    <h1>ログイン</h1>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

        @error('email')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="password">パスワード</label>
        <input type="password" name="password" id="password">

        <button type="submit">ログイン</button>
    </form>
@endsection