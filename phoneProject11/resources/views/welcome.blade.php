<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Добре дошли в приложението за телефони и магазини!</h1>
        <p class="lead">Разгледайте наличните телефони и магазини.</p>



<a href="{{ route('login') }}" class="btn btn-warning btn-lg mx-2">Вход</a>
    <a href="{{ route('register') }}" class="btn btn-warning btn-lg mx-2">Регистрация</a>

    <a href="{{ route('phones.index') }}" class="btn btn-primary btn-lg mx-2">Всички телефони</a>

    <a href="{{ route('stores.index') }}" class="btn btn-success btn-lg mx-2">Магазини</a>

        
        <h2 class="mt-4">Най-продавани Телефони</h2>
        <div class="row">
            @foreach ($phones as $phone)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $phone->brand }} - {{ $phone->model }}</h5>
                            <p class="card-text">Цена: {{ $phone->price }} лв.</p>
                            <p class="card-text">Цвят: {{ $phone->color }}</p>
                            <p class="card-text">{{ $phone->in_stock ? 'В наличност' : 'Изчерпан' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="mt-4">Всички магазини</h2>
        <div class="row">
            @foreach ($stores as $store)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $store->name }}</h5>
                            <p class="card-text">Адрес: {{ $store->address }}</p>
                            <p class="card-text">Телефон: {{ $store->phone }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
