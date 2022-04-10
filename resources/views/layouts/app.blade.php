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
    <div class>
        <nav class="sticky top-0 z-40 w-full backdrop-blur transition-colors duration-500 lg:z-50 lg:border-b lg:border-slate-900/10  bg-white bg-white/80 ">
            <div class="max-w-7xl flex flex-none justify-between mx-auto pr-8">
                <div>
                    {{-- <a href="/"> --}}
                        <logo-large class="py-2 px-0"></logo-large>
                    {{-- </a> --}}
                </div>
                @guest
                <burger-menu></burger-menu>
                @endguest
               @auth
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                           
                </form>
                
                <user-menu :user={{auth()->user()}}></user-menu>
               @endauth
            </div>
        </nav>
        <div class='w-full mx-0 mt-4'>
            <main class="py-4 lg:px-0 col-span-12 grid grid-cols-12 gap-8 mb-10">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>