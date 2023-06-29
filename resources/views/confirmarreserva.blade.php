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
            <div class="btn-tab arrow ">
                <div>Confirma tus datos</div>
            </div>
            <div class="btn-tab arrow arrow-color">
                <div>Confirma tu reserva</div>
            </div>
        </div>
    </div>
</body>
@endsection