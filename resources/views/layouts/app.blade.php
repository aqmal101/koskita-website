<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KosKita') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <script src="https://kit.fontawesome.com/5f815bdce1.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="overflow-hidden box-border">
        @include('components.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('components.footer')
    </div>
</body>

</html>