<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class='antialiased'  id="app">
    <div>
        <nav class="sticky top-0 z-40 w-full backdrop-blur transition-colors duration-500 lg:z-50 lg:border-b lg:border-slate-900/10  bg-white supports-backdrop-blur:bg-white/95 flex flex-none justify-between">
            <div>
                <logo-large class="py-2 px-0"></logo-large>
            </div>
            <div class="flex gap-5 items-center text-xl">
                @guest
                @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">Вход</a>
                @endif

                @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                @endif
                @else

                <p>
                    Добро пожаловать, {{ Auth::user()->name }}
                </p>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Выход') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest
            </div>
        </nav>
        <div class='grid columns-12 gap-8 max-w-7xl mx-auto mt-10'>
            <main class="py-4 px-4 lg:px-0 col-span-12">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>