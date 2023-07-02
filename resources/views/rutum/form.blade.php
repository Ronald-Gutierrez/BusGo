<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- Agrega el enlace al archivo JS de SweetAlert -->
</head>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ruta') }}
            {{ Form::text('id_ruta', $rutum->id_ruta, ['class' => 'form-control' . ($errors->has('id_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Id Ruta']) }}
            {!! $errors->first('id_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('origen') }}
            {{ Form::text('origen', $rutum->origen, ['class' => 'form-control' . ($errors->has('origen') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
            {!! $errors->first('origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destino') }}
            {{ Form::text('destino', $rutum->destino, ['class' => 'form-control' . ($errors->has('destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('encargado') }}
            {{ Form::text('encargado', $rutum->encargado, ['class' => 'form-control' . ($errors->has('encargado') ? ' is-invalid' : ''), 'placeholder' => 'Encargado']) }}
            {!! $errors->first('encargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="" class="btn btn-primary" onclick="showSuccessAlert()">{{ __('Crear Ruta') }}</button>
    </div>
</div>
<script>
    function showSuccessAlert() {
        Swal.fire({
            icon: 'success',
            title: 'Ruta creada con éxito',
            text: '¡Su ruta se mostrará en pantalla!',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            didClose: () => {
                setTimeout(() => {
                    window.location.href = "{{ url('/ruta') }}";
                }, 3000); // Retraso de 3 segundos (3000 ms)
            }
        });
    }
</script>
