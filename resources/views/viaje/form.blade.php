<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_viaje') }}
            {{ Form::text('id_viaje', $viaje->id_viaje, ['class' => 'form-control' . ($errors->has('id_viaje') ? ' is-invalid' : ''), 'placeholder' => 'Id Viaje']) }}
            {!! $errors->first('id_viaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::date('fecha_inicio', $viaje->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'fecha_inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_retorno') }}
            {{ Form::date('fecha_retorno', $viaje->fecha_retorno, ['class' => 'form-control' . ($errors->has('fecha_retorno') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Retorno']) }}
            {!! $errors->first('fecha_retorno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            <select id="estado" name="estado" class="form-control{{$errors->has('estado') ? ' is-invalid' : ''}}" >
                <option>1</option>
                <option>0</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('id_ruta') }}
            {{ Form::text('id_ruta', $viaje->id_ruta, ['class' => 'form-control' . ($errors->has('id_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Id Ruta']) }}
            {!! $errors->first('id_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>