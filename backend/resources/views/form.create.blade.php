@extends('layouts.app')
<h1>新規作成</h1>

@section('content')
    <form method="POST" action="{{ route('form.store') }}">
        @csrf

        <div>
            <label for="form-name">名前</label>
            <input type="text" name="name" id="form-name" required>
        </div>

        <div>
            <label for="form-email">メールアドレス</label>
            <input type="email" name="email" id="form-email" required>
        </div>

        <div>
            <label for="form-message">お問い合わせ内容</label>
            <textarea name="message" id="form-message" required></textarea>

            <button type="submit">登録</button>
        </div>

        <a href="{{ route('home') }}">ホームへ戻る</a>
    </form>
@endsection
