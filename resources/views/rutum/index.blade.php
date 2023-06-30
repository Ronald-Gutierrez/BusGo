@section('template_title')
    Rutum
@endsection

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control del Administrador</title>
    <!-- Incluir los estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <!-- Incluir los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a href="{{ url('/homebusiness') }}" class="font-semibold text-xl">Inicio</a>
                        @auth
                            <a href="{{ url('/ruta') }}" class="ml-4 font-semibold text-xl">Crear Ruta</a>
                            <a href="{{ url('/viajes') }}" class="ml-4 font-semibold text-xl">Crear Viaje</a> 
                        @endauth
                    </div>
                </div>
                <div class="flex items-center">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <div class="ml-4 text-white">
                                @auth
                                    <a href="{{ url('/homebusiness') }}" class="font-semibold text-xl">Home</a>
                                    
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-xl">Ingresar</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-xl">Registrate</a>
                                    @endif                        
                                @endauth
                            </div>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="color: white;" class=" ml-4 font-semibold text-xl nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
            </div>
        </div>
    </nav>


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <h1> Crea una nueva Ruta</h1>
                        </span>

                            <div class="float-right">
                            <a href="{{ route('ruta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                            </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    
                                    <th>Id Ruta</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Encargado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ruta as $rutum)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $rutum->id_ruta }}</td>
                                        <td>{{ $rutum->origen }}</td>
                                        <td>{{ $rutum->destino }}</td>
                                        <td>{{ $rutum->encargado }}</td>
                                        <!-- Esta Parte falta arreglar para hacer la eliminacion y editar y mostrar -->
                                
                                        {{--<td>
                                            <form action="{{ route('ruta.destroy',$rutum->id) }}" method="POST" class="formEliminar">
                                                <a class="btn btn-sm btn-primary " href="{{ route('ruta.show',$rutum->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('ruta.edit',$rutum->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </td>--}}

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $ruta->links() !!}
        </div>
    </div>
</div>

