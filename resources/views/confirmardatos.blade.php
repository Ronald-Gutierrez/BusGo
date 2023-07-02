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
            <div class="btn-tab arrow ">
                <div>Elige tu asiento</div>
            </div>
            <div class="btn-tab arrow arrow-color">
                <div>Confirma tus datos</div>
            </div>
            <div class="btn-tab arrow">
                <div>Confirma tu reserva</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card-propio">
                <span class="card-propio__title">Salida y llegada</span> <br>
                <div class="imagen-lateral"><br>
                    <img src="{{ asset('img/svg/bus-second-color.svg') }}" style="width: 40px;">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="imagen-lateral">
                    <img src="{{ asset('img/svg/llegada-seconf-color.svg') }}" style="width: 40px;">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
                </div>
                <div class="asientos-desc2">
                    <div class="asientos-monto">
                        <p>Asientos</p>
                        <p id="monto">S/</p>
                    </div>
                    <form method="GET" action="{{ route('confirmarreserva',$id_viaje) }}">
                        <?php $i=1?>
                        @while($i < 31)
                            <input id="asiento{{$i}}" name="asiento{{$i}}" type="hidden" value="{{$informacion_asientos['asiento'.strval($i)]}}">
                            <?php ++$i?>
                        @endwhile
                        <button type="submit" class="button-reservar" style="font-size: 20px; width: 400px; height: 50px;">Continuar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cliente-box">
                <div class="cliente-form">
                    <div class="form-group">
                        <label class="form-label">Nombre del Cliente</label>
                        <div class="form-value">
                            <span class="form-text">{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Correo del Cliente</label>
                        <div class="form-value">
                            <span class="form-text">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="terminos-condiciones">
                    <input type="checkbox" id="terminos" name="terminos" class="terminos-checkbox">
                    <label for="terminos">Acepto los <a href="{{ url('/terminos') }}" id="terminos-link">Términos y Condiciones</a></label>
                </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.button-reservar').on('click', function(e) {
                            if (!$('.terminos-checkbox').is(':checked')) {
                                e.preventDefault(); // Evita que se realice la acción predeterminada del botón
                                $('.terminos-condiciones label').css('color', 'red'); // Cambia el color del texto a rojo
                            }
                        });
                    });
                </script>
                
            </div>
        </div>
    </div>
</body>

@endsection
