@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bus</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <script src="{{ asset('js/script.js') }}"></script>
    </head>
    
    <body>
    <div class="container justify-content-center">
        <div class="d-flex mb-5">
            <div class="btn-tab arrow arrow-color">
                <div>Elige tu asiento</div>
            </div>
            <div class="btn-tab arrow">
                <div>Llena tus datos</div>
            </div>
            <div class="btn-tab arrow">
                <div>Confirma tu reserva</div>
            </div>
        </div>
    </div>


    <div class="bus-container">
        <!-- Primera columna -->
        <div class="column">
            <div class="row">
                <buttom class="seat" data-price="10">22</buttom>
            </div>

            <div class="row">
                <buttom class="seat">5</buttom>
            </div>

            <div class="row">
                <buttom class="seat">9</buttom>
            </div>

            <div class="row">
                <buttom class="seat">11</buttom>
            </div>

            <div class="row">
                <buttom class="seat">15</buttom>
            </div>

            <div class="row">
                <buttom class="seat">19</buttom>
            </div>

            <div class="row">
                <buttom class="seat">23</buttom>
            </div>
        </div>
        <!-- Segunda columna -->
        <div class="column">
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
        </div>
            <!-- Tercera columna -->
        <div class="column">
            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
            </div>

            <div class="row">
            <div class="seat" id="empty-seat"></div>
            </div>

            <div class="row">
            <div class="seat" id="empty-seat"></div>
            </div>

            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
            </div>


        </div>
        <!-- cuarta columna -->
        <div class="column">
        <div class="row">
                <button class="seat">23</button>
            </div>

            <div class="row">
                <button class="seat">23</button>
            </div>

            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>

            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/baño.svg') }}" alt="baño" >
            </div>

            <div class="row">
                <button class="seat">23</button>
            </div>

            <div class="row">
                <button class="seat">23</button>
            </div>
        </div>
        <!-- quinta columna -->

        <div class="column">
            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>
        </div>
        <div class="column">
            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
        </div>
        <div class="column">
            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
            <div class="row">
                <button class="seat">1</button>
            </div>
        </div>
            <!-- Tercera columna -->
            <div class="column">
            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>

            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
            </div>
            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>
            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>
            
            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
            </div>
            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>
            <div class="row">
                <button class="seat" id="empty-seat"></button>
            </div>
            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
            </div>
        </div>
        <div class="column">
            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">5</button>
            </div>

            <div class="row">
                <button class="seat">9</button>
            </div>

            <div class="row">
                <button class="seat">11</button>
            </div>

            <div class="row">
                <button class="seat">15</button>
            </div>

            <div class="row">
                <button class="seat">19</button>
            </div>

            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
        </div>
        <div class="column">
            <div class="row">
                <button class="seat">1</button>
            </div>

            <div class="row">
                <button class="seat">5</button>
            </div>

            <div class="row">
                <button class="seat">9</button>
            </div>

            <div class="row">
                <button class="seat">11</button>
            </div>

            <div class="row">
                <button class="seat">15</button>
            </div>

            <div class="row">
                <button class="seat">19</button>
            </div>

            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
            <div class="row">
                <button class="seat">23</button>
            </div>
        </div>
    </body>
@endsection
