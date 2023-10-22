<div class="box box-info padding-1">
    <div class="box-body">        
        <div class="form-group">
            {{ Form::label('num_documento') }}
            {{ Form::text('num_documento', $cliente->num_documento, ['class' => 'form-control' . ($errors->has('num_documento') ? ' is-invalid' : ''), 'placeholder' => 'Num Documento']) }}
            {!! $errors->first('num_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('tipo_documento') }}
            {{ Form::select('cod_tipo_documento', $tipo_de_documentos , $cliente->cod_tipo_documento, ['class' => 'form-control' . ($errors->has('cod_tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Cod Tipo Documento']) }}
            {!! $errors->first('cod_tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $cliente->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $cliente->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>      
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::select('cod_ciudad', $ciudads, $cliente->cod_ciudad, ['class' => 'form-control' . ($errors->has('cod_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Cod Ciudad']) }}
            {!! $errors->first('cod_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>