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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">        
        <nav class="flex items-center justify-around flex-wrap bg-white p-4 shadow-md">
            <div class="flex items-center flex-shrink-0 text-gray-800 mr-6 cursor-pointer">
                <img src="{{ asset('image/logo.png') }}" width="50px" alt="{{ config('app.name', 'Laravel') }}">
            </div>
            <div>
                @guest
                    <a class="no-underline hover:underline px-1" href="{{ route('login') }}">Login</a>
                    <a class="no-underline hover:underline px-1" href="{{ route('register') }}">Register</a>
                @else
                    <a class="no-underline hover:underline px-1" href="/profile/{{ auth()->user()->id }}">Profile</a>
                    <a href="{{ route('logout') }}"
                        class="no-underline hover:underline px-1"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html>
