@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs mb-3">

        <li class="nav-item"><a class="nav-link active" href="{{ route('cabinet.home') }}">Кабинет пользователя</a></li>
        <li class="nav-item"><a class="nav-link " href="{{ route('cabinet.adverts.index') }}">Объявления</a></li>
        <li class="nav-item"><a class="nav-link "  href="{{ route('cabinet.favorites.index') }}">Избранные Обявления</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('cabinet.profile.home') }}">Профиль</a></li>

    </ul>
    <h2>Кабинет пользователя</h2>
@endsection
