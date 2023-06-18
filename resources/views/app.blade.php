<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Task Master PWA') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
{{----}}

{{--    <!-- Scripts -->--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
    <link rel="manifest" href="../favicons/site.webmanifest">
    <link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00ffff">
    <meta name="theme-color" content="#00ffff">
</head>
<body>
<div id="app">
    <nav class="navbar sticky-top navbar-expand-md  bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route ('main') }}">
                <img src="../img/logo.png" alt="" width="40" height="44" class="d-inline-block align-text-top">
                Task Master
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-wrap" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-menu">
                    @guest
                        @if (Auth::guest())
                            <li><a href="{{route('main')}}">Главная страница</a></li>
                            <li><a href="{{route('about')}}">О нас</a></li>
                        @endif
                    @else
                        <li><a href="{{route('main')}}">Главная страница</a></li>
                        <li><a href="{{route('index')}}">Мои дела</a></li>
                        <li><a href="{{route('create')}}">Новые дела</a></li>
                        <li><a href="{{route('about')}}">О нас</a></li>
                    @endguest
                </ul>
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Войти</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('main') }}">
                                Главная
                            </a>
                            <a class="dropdown-item" href="{{ route('index') }}">
                                Профиль
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Выйти
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>
</div>

<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<footer style="color: #ffffff">
    <ul class="menu">
        <p>Copyright © 2023 Все права защищены</p>
        <li><a id="left" href="{{route('main')}}">Главная страница</a></li>
        <li><a id="left" href="{{route('about')}}">О нас</a></li>
    </ul>
</footer>

</body>
</html>
