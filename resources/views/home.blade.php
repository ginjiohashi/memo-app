@extends('layouts.app')

@section('title', 'Memo App')

@section('content')
    <div class="home-intro">
        <h1>Memo App</h1>
        <p>シンプルなメモアプリです。</p>

        @auth
            <p class="welcome-message">
                ようこそ、{{ auth()->user()->name }} さん。
            </p>
        @endauth

        @guest
            <p>メモを作成するには、ユーザー登録またはログインしてください。</p>

            <div class="home-actions">
                <a href="{{ route('register') }}" class="button button-primary">
                    ユーザー登録
                </a>

                <a href="{{ route('login') }}" class="button button-secondary">
                    ログイン
                </a>
            </div>
        @endguest
    </div>
@endsection