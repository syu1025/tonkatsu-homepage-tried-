@extends('layouts.app')

@section('content')
    <div class="menu-container">
        <h1 class="menu-title">メニュー</h1>

        <div class="menu-list">
            @foreach ($menulists as $menulist)
                <h2 class="menu-category">
                    <a href="{{ route('menu.index') }}?menu_id={{ $menulist->id }}">{{ $menulist->name }}</a>
                </h2>
            @endforeach
        </div>

        <div class="menu-container">
            @foreach ($menus as $menu)
                <div class="menu-item">
                    <h3 class="menu-item-name">{{ $menu->name }}</h3>
                    <p class="menu-item-price">{{ $menu->price }}円</p>
                    <p class="menu-item-description">{{ $menu->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<style>
    .menu-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .menu-title {
        text-align: center;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    .menu-list {
        margin-bottom: 30px;
    }

    .menu-category a {
        color: #007bff;
        text-decoration: none;
        font-size: 1.5em;
        font-weight: bold;
    }

    .menu-category a:hover {
        color: #0056b3;
    }

    .menu-item {
        border-bottom: 1px solid #ddd;
        padding: 15px 0;
    }

    .menu-item-name {
        font-size: 1.3em;
        font-weight: bold;
    }

    .menu-item-price {
        color: #e44d26;
        font-size: 1.2em;
        font-weight: bold;
    }

    .menu-item-description {
        color: #555;
    }
</style>
