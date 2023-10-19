<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cod_factura') }}
            {{ Form::text('cod_factura', $detalleFactura->cod_factura, ['class' => 'form-control' . ($errors->has('cod_factura') ? ' is-invalid' : ''), 'placeholder' => 'Cod Factura']) }}
            {!! $errors->first('cod_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_articulo') }}
            {{ Form::text('cod_articulo', $detalleFactura->cod_articulo, ['class' => 'form-control' . ($errors->has('cod_articulo') ? ' is-invalid' : ''), 'placeholder' => 'Cod Articulo']) }}
            {!! $errors->first('cod_articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalleFactura->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $detalleFactura->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>