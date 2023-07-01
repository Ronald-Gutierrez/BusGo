<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_bus') }}
            {{ Form::text('id_bus', $bus->id_bus, ['class' => 'form-control' . ($errors->has('id_bus') ? ' is-invalid' : ''), 'placeholder' => 'Id Bus']) }}
            {!! $errors->first('id_bus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_bus') }}
            {{ Form::text('num_bus', $bus->num_bus, ['class' => 'form-control' . ($errors->has('num_bus') ? ' is-invalid' : ''), 'placeholder' => 'Num Bus']) }}
            {!! $errors->first('num_bus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad') }}
            {{ Form::text('capacidad', $bus->capacidad, ['class' => 'form-control' . ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $bus->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_viaje') }}
            {{ Form::text('id_viaje', $bus->id_viaje, ['class' => 'form-control' . ($errors->has('id_viaje') ? ' is-invalid' : ''), 'placeholder' => 'Id Viaje']) }}
            {!! $errors->first('id_viaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asientos') }}
            {{ Form::text('asientos', $bus->asientos, ['class' => 'form-control' . ($errors->has('asientos') ? ' is-invalid' : ''), 'placeholder' => 'Asientos']) }}
            {!! $errors->first('asientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>