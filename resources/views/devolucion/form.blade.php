<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cod_detalle_facturas') }}
            {{ Form::text('cod_detalle_facturas', $devolucion->cod_detalle_facturas, ['class' => 'form-control' . ($errors->has('cod_detalle_facturas') ? ' is-invalid' : ''), 'placeholder' => 'Cod Detalle Facturas']) }}
            {!! $errors->first('cod_detalle_facturas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $devolucion->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_devolucion') }}
            {{ Form::text('fecha_devolucion', $devolucion->fecha_devolucion, ['class' => 'form-control' . ($errors->has('fecha_devolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolucion']) }}
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $devolucion->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>