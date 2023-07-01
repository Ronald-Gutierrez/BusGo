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
                <div>Confirma tus datos</div>
            </div>
            <div class="btn-tab arrow">
                <div>Confirma tu reserva</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="croquis_bus_general">
                <div class="container">
                    <div class="column">
                        <?php $i =0 ?>
                        @while ($i < 48)
                            <?php if($i % 12 == 0 && $i!=0){?>
                                </div>
                                <div class="column">
                            <?php }?>
                            <?php if($i % 24 == 0 && $i!=0){?>
                                </div>
                                <div class="column">
                                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                                        <div class="seatempty col4"></div> 
                                        <div class="seatempty col4"></div> 
                                        <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                                        <div class="seatempty col4"></div> 
                                        <div class="seatempty col4"></div> 
                                        <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                                        <div class="seatempty col4"></div> 
                                        <div class="seatempty col4"></div> 
                                        <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                                        <div class="seatempty col4"></div> 
                                        <div class="seatempty col4"></div> 
                                </div>
                                <div class="column">
                            <?php }?>
                            <div class="seat col4" id="{{$i+1}}" data-bs-toggle="tooltip" data-precio="120.00">{{$i+1}}</div>
                            <?php ++$i ?>
                        @endwhile
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="empresa-description mb-2" style="position: absolute; top: 220px; left: 650px;">
                    <div class="card-propio">
                        <span class="card-propio__title">Salida y llegada</span>
                        <div class="imagen-lateral">
                            <img  src="{{ asset('img/svg/bus-second-color.svg') }}" style="width: 40px;">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        </div>
                        <div class="imagen-lateral">
                            <img  src="{{ asset('img/svg/llegada-seconf-color.svg') }}"style="width: 40px;">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
                        </div>
                        <div class="asientos-desc2">
                            <div class="asientos-monto">
                                <p>Asientos</p>
                                <p id="monto">S/</p>
                            </div>
                            <a  href="{{ url('/selectviaje/confirmardatos') }}" class="button-reservar" style="font-size: 20px; width: 400px; height: 50px;" >RESERVAR</a>
                        </div>

                    </div>
                    <br>
                    <div class="card-propio">
                        <span class="card-propio__title">Caracteristicas</span>     
                        <div class="columna_caracteristica">
                            <div class="imagen-lateral-carac">
                                <img src="{{ asset('img/svg/mascotas.svg') }}" style="width: 40px;">
                                <p> Mascotas</p>
                            </div>
                            <div class="imagen-lateral-carac">
                                <img src="{{ asset('img/svg/cortinas.svg') }}" style="width: 40px;">
                                <p>Cortinas</p>
                            </div>

                        </div>
                        <div class="columna_caracteristica">
                            <div class="imagen-lateral-carac">
                                <img src="{{ asset('img/svg/usb.svg') }}" style="width: 40px;">
                                <p>Cargados USB</p>
                            </div>
                            <div class="imagen-lateral-carac">
                                <img src="{{ asset('img/svg/pantalla_led.svg') }}" style="width: 40px;">
                                <p>Pantalla Led</p>
                            </div>
                            <div class="imagen-lateral-carac">
                                <img src="{{ asset('img/svg/aire_acondicionado.svg') }}" style="width: 40px;">
                                <p>Aire Acondicionado</p>
                            </div>
                            <div class="imagen-lateral-carac">
                                <img src="{{ asset('img/svg/bañoS.svg') }}" style="width: 40px;">
                                <p>Baño urinario</p>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
