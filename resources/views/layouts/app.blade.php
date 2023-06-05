<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BusGo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* Estilos de Tailwind CSS */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>
</head>
<body>
    <div id="app">
        <!-- Barra de navegación -->
    <nav class="bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Logo">
                    </div>
                    <div class="ml-4 text-white">
                        <a href="{{ url('/') }}" class="font-semibold text-xl">Inicio</a>
                        <a href="#" class="ml-4 font-semibold text-xl">Acerca de</a>
                        <a href="#" class="ml-4 font-semibold text-xl">Contacto</a>
                    </div>
                </div>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        <div class="ml-4 text-white">
                            @auth
                                <a href="{{ url('/home') }}" class="font-semibold text-xl">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-xl">Ingresar</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-xl">Registrate</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
