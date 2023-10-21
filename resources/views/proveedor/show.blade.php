@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? "{{ __('Show') Proveedor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Documento:</strong>
                            {{ $proveedor->Num_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Tipo Documento:</strong>
                            {{ $proveedor->cod_tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $proveedor->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Comercial:</strong>
                            {{ $proveedor->nombre_comercial }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedor->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Ciudad:</strong>
                            {{ $proveedor->cod_ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedor->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
