@extends('layouts.app')

@section('template_title')
    {{ $viaje->name ?? "{{ __('Show') Viaje" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Viaje:</strong>
                            {{ $viaje->id_viaje }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $viaje->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Retorno:</strong>
                            {{ $viaje->fecha_retorno }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $viaje->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ruta:</strong>
                            {{ $viaje->id_ruta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
