<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Numero de bus') }}
            {{ Form::number('num_bus', $bus->num_bus, ['class' => 'form-control' . ($errors->has('num_bus') ? ' is-invalid' : ''), 'placeholder' => 'Id bus']) }}
            {!! $errors->first('num_bus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Capacidad') }}
            {{ Form::number('capacidad', $bus->capacidad, ['class' => 'form-control' . ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'capacidad']) }}
            {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            <select id="estado" name="estado" class="form-control{{$errors->has('estado') ? ' is-invalid' : ''}}" >
                <option>1</option>
                <option>0</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('id_viaje') }}
            {{ Form::number('id_viaje', $bus->id_viaje, ['class' => 'form-control' . ($errors->has('id_viaje') ? ' is-invalid' : ''), 'placeholder' => 'Id Viaje']) }}
            {!! $errors->first('id_viaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>