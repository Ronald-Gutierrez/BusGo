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

    <h1 class="text-center font-bold text-xl"> Gestion de viajes</h1>
    <div class="bg-gray-100 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <form action="#" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                    <div>
                        <label for="ruta" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Ruta</label>
                        <select name="ruta" id="ruta" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400">
                            <option value="" disabled selected>Seleccione una ruta</option>
                        </select>
                    </div>
                    <div>
                        <label for="fechadeinicio" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Fecha de Inicio</label>
                        <input name="fechadeinicio" id="fechadeinicio"  type="date">
                    </div>
                    <div>
                        <label for="fechaderetorno" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Fecha de Retorno</label>
                        <input name="fechaderetorno" id="fechaderetorno"  type="date">
                    </div>
                    <div>
                        <label for="precio" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Precio</label>
                        <input name="precio" id="precio"  type="number">
                    </div>
                </form>
                <!--<form action="#" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                    <div>
                        <label for="rutaorigen" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Ruta</label>
                        <select name="rutaorigen" id="rutaorigen" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400">
                            <option value="" disabled selected>Seleccione el origen</option>
                        </select>
                    </div>
                    <div>
                        <label for="rutadestino" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Ruta</label>
                        <select name="rutadestino" id="rutadestino" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400">
                            <option value="" disabled selected>Seleccione el destino</option>
                        </select>
                    </div>
                </form>
            -->
                <br>
                <br>
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                    <div>
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Añadir viaje</button>
                    </div>
                    <div>
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buscar viaje</button>
                    </div>
                    <div>
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Añadir ruta</button>
                    </div>
                    <div>
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buscar ruta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>© 2023 - Todos los derechos reservados</p>
    </div>
@endsection

