@extends('layouts.app')

@section('content')
    <h1>うまい飯は活力だ</h1>
    <p></p>
    <ul>
        <div>
            @foreach ($contacts as $contact)
                <p>{{ $contact->name }}さん、こんにちは</p>
            @endforeach
        </div>
    </ul>
    <p>お問い合わせはこちらからお願いします。</p>
@endsection
