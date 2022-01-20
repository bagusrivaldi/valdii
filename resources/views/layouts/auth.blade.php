<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">@yield('form-header')</h1>
                    <p class="text-gray-400 dark:text-gray-400">@yield('form-text')</p>
                </div>
            <div class="m-7">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>