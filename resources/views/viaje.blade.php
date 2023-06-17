@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bus</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="bus-container">
        <!-- Primera columna -->
        <div class="column">
                <buttom class="row">
                    <buttom class="seat">1</buttom>
                </buttom>

                <buttom class="row">
                    <buttom class="seat">5</buttom>
                </buttom>

                <buttom class="row">
                    <buttom class="seat">9</buttom>
                </buttom>

                <buttom class="row">
                    <buttom class="seat">11</buttom>
                </buttom>

                <buttom class="row">
                    <buttom class="seat">15</buttom>
                </buttom>

                <buttom class="row">
                    <buttom class="seat">19</buttom>
                </buttom>

                <buttom class="row">
                    <buttom class="seat">23</buttom>
                </buttom>
        </div>
        <!-- Segunda columna -->
        <div class="column">
            <div class="row">
            <div class="seat">2</div>
            </div>
            <div class="row">
            <div class="seat">6</div>
            </div>
            <div class="row">
            <div class="seat">10</div>
            </div>
            <div class="row">
            <div class="seat">12</div>
            </div>
            <div class="row">
            <div class="seat">16</div>
            </div>
            <div class="row">
            <div class="seat">20</div>
            </div>
            <div class="row">
            <div class="seat">24</div>
            </div>
        </div>
            <!-- Tercera columna -->
        <div class="column">
            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="baño" >
            </div>

            <div class="row">
            <div class="seat" id="empty-seat"></div>
            </div>

            <div class="row">
            <div class="seat" id="empty-seat"></div>
            </div>

            <div class="row">
                <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}">
            </div>


        </div>
        <!-- cuarta columna -->
        <div class="column">
            <div class="row">
                <div class="seat">1</div>
            </div>

            <div class="row">
                <div class="seat">5</div>
            </div>

            <div class="row">
                <div class="seat">9</div>
            </div>

            <div class="row">
                <div class="seat">11</div>
            </div>

            <div class="row">
                <div class="seat">19</div>
            </div>

            <div class="row">
                <div class="seat">19</div>
            </div>

            <div class="row">
                <div class="seat">23</div>
            </div>
        </div>
        <!-- quinta columna -->

        <div class="column">
            <div class="row">
                <div class="seat">1</div>
            </div>

            <div class="row">
                <div class="seat">5</div>
            </div>

            <div class="row">
                <div class="seat">9</div>
            </div>

            <div class="row">
                <div class="seat">11</div>
            </div>

            <div class="row">
                <div class="seat">15</div>
            </div>

            <div class="row">
                <div class="seat">19</div>
            </div>

            <div class="row">
                <div class="seat">23</div>
            </div>
        </div>
    </body>
@endsection
