<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Vite Scripts for CSS and JS -->
       <!--  @vite(['resources/css/app.css', 'resources/js/app.js']) -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
<body>
    @include('layouts.navigation')

    @if (isset($header))
        <header>
            <div class="header-container">
                {{ $header }}
            </div>
        </header>
    @endif
    <main>
        @yield('content')
    </main>
</body>





</body>
</html>
