@extends('layouts.app')

@section('title', 'Memo App')

@section('content')
    <h1>Memo App</h1>
    <p>シンプルなメモアプリです。</p>

    @auth
        <p>ログイン中：{{ auth()->user()->name }}</p>
    @endauth

    @guest
        <p>ログインしていません</p>
    @endguest
@endsection