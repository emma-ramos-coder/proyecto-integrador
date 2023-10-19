<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('no_documento') }}
            {{ Form::text('no_documento', $proveedor->no_documento, ['class' => 'form-control' . ($errors->has('no_documento') ? ' is-invalid' : ''), 'placeholder' => 'No Documento']) }}
            {!! $errors->first('no_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_tipo_documento') }}
            {{ Form::text('cod_tipo_documento', $proveedor->cod_tipo_documento, ['class' => 'form-control' . ($errors->has('cod_tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Cod Tipo Documento']) }}
            {!! $errors->first('cod_tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proveedor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $proveedor->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_comercial') }}
            {{ Form::text('nombre_comercial', $proveedor->nombre_comercial, ['class' => 'form-control' . ($errors->has('nombre_comercial') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Comercial']) }}
            {!! $errors->first('nombre_comercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $proveedor->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_ciudad') }}
            {{ Form::text('cod_ciudad', $proveedor->cod_ciudad, ['class' => 'form-control' . ($errors->has('cod_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Cod Ciudad']) }}
            {!! $errors->first('cod_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $proveedor->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>