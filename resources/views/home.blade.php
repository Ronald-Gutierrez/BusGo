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

    <h1 class="text-center font-bold text-xl"> RESERVA TU ASIENTO AQUI! </h1>
    
    <!-- Formulario de búsqueda -->
    <div class="bg-gray-100 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <form action="#" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                    <div>
                        <label for="origen" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Origen</label>
                        <select name="origen" id="origen" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400">
                            <option value="" disabled selected>Selecciona un origen</option>
                            <option value="lima">Lima</option>
                            <option value="arequipa">Arequipa</option>
                            <option value="cusco">Cusco</option>
                            <option value="trujillo">Trujillo</option>
                            <option value="piura">Piura</option>
                            <option value="chiclayo">Chiclayo</option>
                            <option value="ica">Ica</option>
                            <option value="huancayo">Huancayo</option>
                            <option value="tacna">Tacna</option>
                            <option value="puno">Puno</option>
                        </select>
                    </div>
                    <div>
                        <label for="destino" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Destino</label>
                        <select name="destino" id="destino" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400">
                            <option value="" disabled selected>Selecciona un destino</option>
                            <option value="lima">Lima</option>
                            <option value="arequipa">Arequipa</option>
                            <option value="cusco">Cusco</option>
                            <option value="trujillo">Trujillo</option>
                            <option value="piura">Piura</option>
                            <option value="chiclayo">Chiclayo</option>
                            <option value="ica">Ica</option>
                            <option value="huancayo">Huancayo</option>
                            <option value="tacna">Tacna</option>
                            <option value="puno">Puno</option>
                        </select>
                    </div>
                    <div>
                        <label for="fecha" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Fecha de viaje</label>
                        <input type="date" name="fecha" id="fecha" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="fecha-regreso" class="block text-sm font-medium text-gray-700 bg-red-200 rounded-md px-2 py-1">Fecha de regreso (opcional)</label>
                        <input type="date" name="fecha-regreso" id="fecha-regreso" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center mt-8">Viajes disponibles</h1>
        <div class="flex flex-col mt-8">
            <div class="bg-gray-200 p-4 mb-4 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div>
                <h2 class="text-xl font-bold">Lima - Tacna</h2>
                <p class="text-gray-600">21 de junio de 2023</p>
                </div>
                <p class="text-2xl font-bold">S/ 100.00</p>
            </div>
            <a href="{{ url('/viaje') }}" class="block mt-4 px-6 py-2 bg-blue-500 text-white font-bold rounded-lg text-center">Seleccionar</a>
            </div>
            
            <!-- Repite el bloque anterior para cada viaje disponible -->
        </div>
    </div>

    <div class="footer">
        <p>© 2023 - Todos los derechos reservados</p>
    </div>
@endsection

