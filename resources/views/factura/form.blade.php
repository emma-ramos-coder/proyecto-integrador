<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('num_factura') }}
            {{ Form::text('num_factura', $factura->num_factura, ['class' => 'form-control' . ($errors->has('num_factura') ? ' is-invalid' : ''), 'placeholder' => 'Num Factura']) }}
            {!! $errors->first('num_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_cliente') }}
            {{ Form::text('cod_cliente', $factura->cod_cliente, ['class' => 'form-control' . ($errors->has('cod_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cod Cliente']) }}
            {!! $errors->first('cod_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_empleado') }}
            {{ Form::text('nombre_empleado', $factura->nombre_empleado, ['class' => 'form-control' . ($errors->has('nombre_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empleado']) }}
            {!! $errors->first('nombre_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_facturacion') }}
            {{ Form::text('fecha_facturacion', $factura->fecha_facturacion, ['class' => 'form-control' . ($errors->has('fecha_facturacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Facturacion']) }}
            {!! $errors->first('fecha_facturacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_forma_pago') }}
            {{ Form::text('cod_forma_pago', $factura->cod_forma_pago, ['class' => 'form-control' . ($errors->has('cod_forma_pago') ? ' is-invalid' : ''), 'placeholder' => 'Cod Forma Pago']) }}
            {!! $errors->first('cod_forma_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_factura') }}
            {{ Form::text('total_factura', $factura->total_factura, ['class' => 'form-control' . ($errors->has('total_factura') ? ' is-invalid' : ''), 'placeholder' => 'Total Factura']) }}
            {!! $errors->first('total_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iva') }}
            {{ Form::text('iva', $factura->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>