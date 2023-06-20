@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* Estilos de Tailwind CSS */
            @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
        </style>
    </head>

    <div>

    <h1 class="text-center font-bold text-xl"> Añadir Empresa </h1>
    <div class="footer">
        <p>© 2023 - Todos los derechos reservados</p>
    </div>
@endsection

