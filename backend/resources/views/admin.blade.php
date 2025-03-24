@extends('layouts.app')

@section('content')
    <div class="admin-container">
        <h1 class="admin-title">管理者画面</h1>
        <p class="admin-description">ここはadmin_nameさんの管理者画面です。お問い合わせ内容を確認できます。</p>

        <div class="table-container">
            <table class="contact-table">
                <thead>
                    <tr>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせ内容</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .admin-container {
        max-width: 900px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .admin-title {
        text-align: center;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    .admin-description {
        text-align: center;
        font-size: 1.2em;
        margin-bottom: 20px;
    }

    .table-container {
        overflow-x: auto;
    }

    .contact-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .contact-table th,
    .contact-table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .contact-table th {
        background: #007bff;
        color: white;
        font-weight: bold;
    }

    .contact-table tr:nth-child(even) {
        background: #f9f9f9;
    }

    .contact-table tr:hover {
        background: #f1f1f1;
    }
</style>
