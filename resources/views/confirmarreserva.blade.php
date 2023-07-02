@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- Agrega el enlace al archivo JS de SweetAlert -->
</head>

<body>
    <div class="container justify-content-center">
        <div class="d-flex mb-5">
            <div class="btn-tab arrow ">
                <div>Elige tu asiento</div>
            </div>
            <div class="btn-tab arrow ">
                <div>Confirma tus datos</div>
            </div>
            <div class="btn-tab arrow arrow-color">
                <div>Confirma tu reserva</div>
            </div>
        </div>
    </div>
    <div class="row text-center justify-content-center">
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
                    <form method="GET" action="{{ route('realizarreserva',$id_viaje) }}">
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
    </div>

    <script>
        function showSuccessAlert() {
            Swal.fire({
                icon: 'success',
                title: 'Reserva hecha con éxito',
                text: '¡Gracias por reservar con nosotros!',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                didClose: () => {
                    setTimeout(() => {
                        window.location.href = "{{ url('/home') }}";
                    }, 1000); // Retraso de 1 segundo (1000 ms)
                }
            });
        }
    </script>
</body>
@endsection
